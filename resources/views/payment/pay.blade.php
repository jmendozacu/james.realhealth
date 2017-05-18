@extends('layouts.Master')

@section('title') Payment @stop

@section('body')
<section class="container">
	<section class="row col-md-6">
		<p><big><b>Make a Pay to Real Health</b></big><br /></p>
		<form action="{{ route('payment') }}" method="get">
		 <div class="form-group">
		    <strong>Choose your plan</strong><br />
		    <select name="item_name" class="form-control">
		      <option>1 Month $15</option>
		      <option>3 Months $40</option>
		      <option>1 Year $130</option>
		    </select>
		 </div>

		 <div class="form-group">
		    <strong>Which module are you payment for?</strong><br />   
		    <select name="item_number" class="form-control">
		      <option>Fitness</option>
		      <option>Therapy</option>
		    </select>
		 </div> 
		    
		    <input type="submit" value="Pay with PayPal!">
		</form>
	</section>
</section>
@stop