@extends('main')
@section('title','| Login')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!!Form::open()!!}
		{{Form::label('email','Email:')}}
		{{Form::email('email',null,['class'=>'form-control'])}}
		{{Form::label('password','Password:',['class' => 'label-margin'])}}
		{{Form::password('password',['class' => 'form-control'])}}
		{{Form::checkbox('remember')}} {{Form::label('remember','Remeber Me',['class' => 'label-margin'])}}
		{{Form::submit('Log In',['class' =>'btn btn-primary btn-block label-margin'])}}


		{!!Form::close()!!}
	</div>
</div>


@endsection