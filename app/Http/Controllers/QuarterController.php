<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use Illuminate\Http\Request;

class QuarterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function show(Quarter $quarter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function edit(Quarter $quarter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quarter $quarter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quarter  $quarter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quarter $quarter)
    {
        //
    }
	
	public function dropDownShow(Request $request)
	{		
		$quarters = Quarter::all();
		
		return view('welcome', compact('quarters'));
	}
}
