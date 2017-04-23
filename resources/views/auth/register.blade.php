@extends('main')
@section('title','| Register')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	{!!Form::open()!!}
	{{Form::label('name','Name:')}}
	{{Form::text('name',null,['class' => 'form-control'])}}
	{{Form::label('email','Email:',['class' => 'label-margin'])}}
	{{Form::email('email',null,['class' => 'form-control'])}}
	{{Form::label('password','Password:',['class' => 'label-margin'])}}
	{{Form::password('password',['class' => 'form-control'])}}
	{{Form::label('password_confirmation','Confirm Password:',['class' => 'label-margin'])}}
	{{Form::password('password_confirmation',['class' => 'form-control'])}}
	{{Form::submit('Sign Up',['class' => 'btn btn-primary btn-block label-margin'])}}


	{!!Form::close()!!}
		
	</div>
	
	
</div>



@endsection