@extends('main')

@section('title', '| Homepage')
@section('home-active', 'active')

@section('content')

   <div class="container-fluid header">
      <div class="row">
         <div class="col-md-12">
            <div class="container">
               <h1 class="title-header">Welcome to my blog</h1>
               <p class="subtitle">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur.</p>
               <a href="#" class="btn btn-default btn-lg">Recent Posts</a>
            </div>
         </div>
      </div>
   </div>

   <div class="container">
   <div class="row">
      <div class="col-md-8 posts">

        @foreach($posts as $post)

           <div class="post">
              <a href="#"><h3>{{ $post->title }}</h3></a>
              <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
              <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-info btn-sm">Read More</a>
           </div>

         @endforeach


      </div>

      <div class="col-md-3 col-md-offset-1">
         <h2>Sidebar</h2>
      </div>
   </div>
   </div>
@stop
