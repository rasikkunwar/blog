@extends('main')
@section('title' ,'| Show Post')
@section('content')
<div class="row">
<div class="col-md-8">
<h1>{{$post->title}}</h1>
<p class="lead">{{$post->body}}</p>
</div>
<div class="col-md-4">
	<div class="well">
  <dl class="dl-horizontal">
          <label>URL:</label>
           <p><a href="{{url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></p>
         </dl>
         <dl class="dl-horizontal">
          <label>Category:</label>
           <p>{{$post->category->name}}</p>
         </dl>
		<dl class="dl-horizontal">
          <label>Created At:</label>
           <p>{{date('M j,Y H:ia',strtotime($post->created_at))}}</p>
         </dl>
           <dl class="dl-horizontal">
            <label>Last Updated:</label>
             <p>{{date('M j,Y H:ia',strtotime($post->updated_at))}}</p>
               </dl>

               <div class="row">
               <div class="col-sm-6">
               {!!Html::LinkRoute('post.edit','Edit',array($post->id), array('class' => 'btn btn-primary btn-block'))!!}
               	</div>
                <div class="col-sm-6">
                {!!Form::open(['route'=>['post.destroy',$post->id],'method' => 'DELETE'])!!}
              
              {{Form::submit('Delete',['class'=>'btn btn-danger btn-block'])}}
              {!!Form::close()!!}
               </div>
             
               	
			</div>	
      <div class="row">
        <div class="col-md-12">
          {!!Html::LinkRoute('post.index','<<<See all posts',[],['class' => 'btn btn-default btn-block btn-h1-margin'])!!}
        </div>
      </div>
      </div>
			</div>
			</div>
			</div>
@endsection