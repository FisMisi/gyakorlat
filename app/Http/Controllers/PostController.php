<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use \App\Post;

class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id')->unlive()->get();
        
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = \App\Tag::lists('name', 'id');
        return view('posts.create')->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        $article = new Post($request->all());
        //create post
        \Auth::user()->posts()->save($article);
        
        //kapcsoló feltöltése
        $article->tags()->attach($request->input('tags'));
        
        \Session::flash('flash_message','Message send!');
        
//        $post              = new \App\Post;
//        $post->title       = $request->input('title');
//        $post->description = $request->input('description');
//        $post->email       = $request->input('email');
//        $post->user_id     = $request->input('user_id');
//        $post->live        = $request->input('live');
//        $post->save();
        
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $tags = \App\Tag::lists('name', 'id');
        
       $post = Post::findOrFail($id);
       return view('posts.edit')->with(['post' => $post, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, TestRequest $request)
    {
      
       $post = Post::findOrFail($id);
       
       $post->update($request->all());
       
       $post->tags()->sync($request->input('tags'));
       
       return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
