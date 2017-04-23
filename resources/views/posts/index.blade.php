@extends('main')
@section('title','| All Post')
@section('content')
<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{route('post.create')}}" class="btn btn-primary btn-lg btn-block btn-h1-margin">Create New Post</a>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
                <thead>
                	<th>#</th>
                	<th>Title</th>
                	<th>Body</th>
                	<th>Created_at</th>
                	<th>Action</th>
                </thead>
                <tbody>
                	@foreach($posts as $post)
                	<tr>
                	<td>{{$post->id}}</td>
                	<td>{{$post->title}}</td>
                	<td>{{substr($post->body,0,50)}} {{strlen($post->body) > 50 ?'...' : ""}}</td>
                	<td>{{date('M j,Y',strtotime($post->created_at))}}</td>
                	<td><a href="{{route('post.show',$post->id)}}" class="btn btn-success btn-sm btn-block">View</a>
                	{{-- <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-sm btn-block">Edit</a> --}}

                	</td>
                	</tr>
                	@endforeach
                </tbody>
</table>
    <div class="text-center">
            {!!$posts->links();!!}
    </div>
	</div>
</div>

@endsection