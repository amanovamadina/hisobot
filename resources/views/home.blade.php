@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hisobotni yuklash oynasi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
				 <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('/') }}" >
				<div class="form-group col-md-6">
                    <label for="title">Boʻlimlar:</label>
                        <select name="Unitid" id="Quarterid" class="form-control" style="width:350px;margin-left:50px;">
                            @foreach($units as $unit)
					<option value="{{ $unit->id }}" > {{ $unit->name }}
					</option>
				@endforeach
                                
									
                                
                        </select>
                                                
				</div>        
				<div class="form-group col-md-6">
                    <label for="title">Yillar:</label>
                        <select name="Yearid" id="Quarterid" class="form-control" style="width:350px;margin-left:50px;">
                            @foreach($years as $year)
					<option value="{{ $year->id }}" > {{ $year->name }}
					</option>
				@endforeach          
						                               
                        </select>
                                                
				</div>    
				
				<div class="form-group col-md-6">
                    <label for="title">Choraklar:</label>
                       
						
						<select name="Quarterid" id="Quarterid" class="form-control" style="width:350px;margin-left:50px;">
				@foreach($quarters as $quarter)
					<option value="{{ $quarter->id }}" > {{ $quarter->name }}
					</option>
				@endforeach

			</select>
                                                
				</div>  

					
 
  
 
      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('/') }}" >
                 
          <div class="row">
 
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Faylni tanlang" id="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>
                 
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
          </div>     
      </form>

 
</div>  
				 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
