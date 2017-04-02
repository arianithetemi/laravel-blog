<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::orderBy('id', 'desc')->paginate(7);
        return view('posts.index', ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        // Store in the DB
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        Session::flash('success', "The post was successfully saved!");

        // Redirect to another page
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = Post::find($id);
        return view('posts.show', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        // Find the post in the db and save as var
        $post = Post::find($id);
        // return a view and pass in the var we previously created
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // Validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        // Save the data to the db
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        // set flash data with success message
        Session::flash('success', "This post was successfully saved.");
        // redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();

        // Session::flash('success', 'The posts was successfully deleted!');
        return redirect()->route('posts.index');
    }
}
