@extends('main')
@section('title','| Blog')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>Blog</h1>
	</div>
</div>
<hr>
@foreach($posts as $post)
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{$post->title}}</h1>
		<h5>Published At: {{date('M j,Y'),strtotime($post->created_at)}}</h5>
		<p>{{$post->body}}</p>
		<a href="{{'blog/'.$post->slug}}" class="btn btn-primary">Read More</a>
	</div>
</div>
<hr>
@endforeach
<div class="row">
	<div class="col-md-12">
		<div class="text-center">
			{{$posts->links()}}
		</div>
	</div>
</div>
@endsection