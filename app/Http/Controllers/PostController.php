<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.post', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        // Post::create($input);
        // return back()->with('flash_message', 'Post Addedd!');

        // dd($request);
        if($request->hasFile("photo")){
            $name=$request->file("photo")->getClientOriginalName();
            $file=$request->file("photo")->storeAs('img',$name);
            // dd($name);
            Post::create([
                "title"=>$request['title'],
                "content"=>$request['content'],
                "photo"=>$name,
            ]);

            return back()->with('flash_message', 'Post Addedd!');
        }
    }

    public function edit($id){
        $post = Post::find($id);
        return view('admin.posts.edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $post = Post::findOrFail($id);
        if($request->hasFile("photo")){
            $name=$request->file("photo")->getClientOriginalName();
            $file=$request->file("photo")->storeAs('img',$name);
            // dd($name);
            $post->update([
                "photo"=>$name,
                "title"=>$request->title,
                "content"=>$request->content
            ]);
        }else{
            $input = $request->all();
            $post->update($input);
        }
        
        return redirect()->back()->with('flash_message', 'Record Updated!');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin/post')->with('flash_message', 'Post deleted!');  
    }
}
