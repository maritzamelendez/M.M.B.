@extends('layout')

@section('title', 'Contáctame')

@section('bnd')

<h3>Contáctame</h3>

<p>Siéntete libre de escribir lo que gustes :)</p>

<form>
	<div class="formulario">
		<div class="row">
		    <div class="col">
		        <input type="text" class="form-control" placeholder="First name">
		    </div>
		    <div class="col">
		        <input type="text" class="form-control" placeholder="Last name">
		    </div>
		</div>
		<br>
		<div class="row">
		    <div class="col">
		        <input type="text" class="form-control" placeholder="Email">
		    </div>
		    <div class="col">
		        <input type="text" class="form-control" placeholder="Phone Number">
		    </div>
		</div>
		<br>
		<div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>	
   </div>
</form>

@endsection