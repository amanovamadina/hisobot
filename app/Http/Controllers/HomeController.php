<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use App\Models\Unit;
use App\Models\Year;
use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$quarters = Quarter::all();
		$units = Unit::all();
		$years = Year::get()->unique('name');
		
		return view('home', compact('quarters','units','years'));
        
    }
	
	public function store(Request $request)
	{
		 
        $validatedData = $request->validate([
         'file' => 'required|rar,zip',
 
        ]);
 
        $name = $request->file('file')->getClientOriginalName();
 
        $path = $request->file('file')->store('public/files');
		
		$unit_id = $request->get('Unitid');
		$quarter_id = $request->get('Quarterid');
		$year_id = $request->get('Yearid') - 1 + $quarter_id;
		dump($unit_id);
		dump($quarter_id);
		dump($year_id);
 
 
        $save = new Report;
 
        $save->unit_id = $unit_id;
		$save->year_id = $year_id;
        $save->link = $path. $name;
 
        return redirect()->route('store')->with('status', 'Fayl yuklandi!');
 

	}
}
