@extends('main')
@section('title' ,'| Edit Post')
@section('content')
<div class="row">
{!!Form::model($posts,['route' => ['post.update',$posts->id],'method'=>'PUT'])!!}
<div class="col-md-8">
{{Form::label('title','Title:')}}
{{Form::text('title',null,['class' => 'form-control input-lg'])}}
{{Form::label('slug','Slug:')}}
{{Form::text('slug',null,['class' => 'form-control input-lg'])}}
{{Form::label('body','Body:',['class'=>'label-margin'])}}
{{Form::text('body',null,['class' => 'form-control'])}}
</div>
<div class="col-md-4">
	<div class="well">
		<dl class="dl-horizontal">
          <dt>Create At:</dt>
           <dd>{{date('M j,Y H:ia',strtotime($posts->created_at))}}</dd>
         </dl>
           <dl class="dl-horizontal">
            <dt>Last Updated:</dt>
             <dd>{{date('M j,Y H:ia',strtotime($posts->updated_at))}}</dd>
               </dl>

               <div class="row">
               <div class="col-sm-6">
               {!!Html::LinkRoute('post.show','Cancel',array($posts->id), array('class' => 'btn btn-danger btn-block'))!!}
               	</div>
                <div class="col-sm-6">
              {{Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])}}
               </div>
               	
			</div>	
			</div>
			</div>

			{!!Form::close()!!}
			</div>
@endsection