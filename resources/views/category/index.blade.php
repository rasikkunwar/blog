@extends('main')
@section('title','All Categories')
@section('content')
<div class="row">
	<div class="col-md-8">
	<h1>Categories</h1>
		<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
			</tr>
			@endforeach
		</tbody>
			
		</table>
	</div>
	<div class="col-md-4">
		<div class="well">
			{!!Form::open(['route'=>'categories.index','method'=>'post'])!!}
			{{Form::label('name','Name:')}}
			{{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Category'])}}
			{{Form::submit('Create',['class'=>'btn btn-primary btn-block btn-h1-margin'])}}
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection