@extends('main')
@section('title', '| Create Post')
@section('stylesheets')
{{Html::style('css/parsley.css')}}
@endsection
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		{!! Form::open(array('route' => 'post.store'))!!}
		{{Form::label('title','Title:') }}
		{{Form::text('title',null,array('class' =>'form-control')) }}
		{{Form::label('slug','Slug:',array('style' => 'margin-top:20px')) }}
		{{Form::text('slug',null,array('class' =>'form-control')) }}
		{{Form::label('body','Post Body:',array('style' => 'margin-top:20px')) }}
		{{Form::textarea('body',null,array('class' =>'form-control')) }}
		{{Form::submit('Create Post',array('class' => 'btn btn-success btn-large btn-block' ,'style' => 'margin-top:20px'))}}

		{!! Form::close() !!}
	</div>
</div>
@endsection
@section('scripts')
{{Html::script('js/parsley.min.js')}}
@endsection