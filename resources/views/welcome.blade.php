<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Hisobot</title>
		<style>
		row {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
}
block {
  width: 100px;
}
		
		</style>

        
    </head>
   <body>
	<div class="container">
	
	<div class="row">
		<div class="block">
			<select>
				@foreach($quarters as $quarter)
					<option value="{{ $quarter->id }}" > {{ $quarter->name }}
					</option>
				@endforeach

			</select>
		</div>
		<div class="block">
			<select>
				@foreach($quarters as $quarter)
					<option value="{{ $quarter->id }}" > {{ $quarter->name }}
					</option>
				@endforeach

			</select>
		</div>	
	</div>
	
	<select class="selectpicker" multiple data-max-options="2">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>

<select class="selectpicker" multiple>
  <optgroup label="Condiments" data-max-options="2">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </optgroup>
  <optgroup label="Breads" data-max-options="2">
    <option>Plain</option>
    <option>Steamed</option>
    <option>Toasted</option>
  </optgroup>
</select>
			 
	
	

		
	</div>
   </body>
</html>
