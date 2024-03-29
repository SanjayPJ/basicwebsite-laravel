@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
	    <div class="form-group">
	    	{{Form::label('name', 'Name')}}
	    	{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('email', 'Email')}}
	    	{{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email address'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('message', 'Message')}}
	    	{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your Message'])}}
	    </div>
	    <div>
	    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	    </div>
	{!! Form::close() !!}
@endsection