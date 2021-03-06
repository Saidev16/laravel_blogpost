<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('posts.index', [
            "posts" => Post::all()
        ]);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show', [
            "post" => Post::find($id)
        ]);
        
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePost $request){

        $data = $request->only(['title','content']);
        $data['slug'] = Str::slug( $data['title'], '-' );
        $data['active'] = false;

        $post = Post::create($data);

        $request->session()->flash('status', 'post was created');

        return redirect()->route('posts.index' );
    }

    public function edit($id){
        $post = Post::findOrFail($id);

        return view('posts.edit',[
            'post'=> $post
        ]);
    }

    public function update(){

    }
    
}
