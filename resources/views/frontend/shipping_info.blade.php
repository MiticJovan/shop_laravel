@extends('layout.main')

@section('content')

<div class="row" style="background-color: white">
	<div class="small-6 small-centered columns">
		
	
	<h3>Shipping Info</h3>

	
	{!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}
	<div class="form-group">
		{{   Form::label('addressline', 'Address Line:') }}
		{!! Form::text('addressline', null, array('class' => 'formcontrol')) !!}
	</div>

	<div class="form-group">
		{{   Form::label('city', 'City:') }}
		{!! Form::text('city', null, array('class' => 'formcontrol')) !!}
	</div>

	<div class="form-group">
		{{   Form::label('state', 'State:') }}
		{!! Form::text('state', null, array('class' => 'formcontrol')) !!}
	</div>

	<div class="form-group">
		{{   Form::label('zip', 'Zip:') }}
		{!! Form::text('zip', null, array('class' => 'formcontrol')) !!}
	</div>

	<div class="form-group">
		{{   Form::label('country', 'Country:') }}
		{!! Form::text('country', null, array('class' => 'formcontrol')) !!}
	</div>

	<div class="form-group">
		{{   Form::label('phone', 'Phone:') }}
		{!! Form::text('phone', null, array('class' => 'formcontrol')) !!}
	</div>


	{!! Form::submit('Proceed to Payment', array('class' => 'button success' )) !!}
	

	{!! Form::close() !!}
	</div>
	</div>

@endsection