
  @extends('main')
  @section('title','| Home')
  @section('content')
       
           <div class="row">
               <div class="col-md-12">
                   <div class="jumbotron">
                     <h1>Welocme To My Blog!!!</h1>
                      <p class="lead">This is my blog built with Laravel.Please,read popular post.</p>
                      <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                  </div>
               </div>
           </div> <!--End of header row -->
           <div class="row">
               <div class="col-md-8">
               @foreach($posts as $post)
                 <hr>
                 <div class="post">
                <h3>{{$post->title}}</h3>
                <p class="lead">{{substr($post->body,0,300)}} {{strlen($post->body)>300 ? '...' : ''}}</p>
                <a href="{{'blog/'.$post->slug}}" class="btn btn-primary">Read More</a>
                </div>
                
                 
                @endforeach
               </div>
                <div class="col-md-3 col-md-offset-1">
                   <h2>Side Bar</h2>
                </div>
           </div>

@endsection
       

   