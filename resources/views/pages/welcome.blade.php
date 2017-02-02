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
         <div class="post">
            <a href="#"><h3>Post Title</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda    officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
            <a href="#" class="btn btn-info btn-sm">Read More</a>
         </div>

         <div class="post">
            <a href="#"><h3>Post Title</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
            <a href="#" class="btn btn-info btn-sm">Read More</a>
         </div>

         <div class="post">
            <a href="#"><h3>Post Title</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
            <a href="#" class="btn btn-info btn-sm">Read More</a>
         </div>

         <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
            <a href="#" class="btn btn-info btn-sm">Read More</a>
         </div>

      </div>

      <div class="col-md-3 col-md-offset-1">
         <h2>Sidebar</h2>
      </div>
   </div>
   </div>
@stop