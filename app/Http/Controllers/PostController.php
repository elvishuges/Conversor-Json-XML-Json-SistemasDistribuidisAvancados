<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use SoapBox\Formatter\Formatter;

class PostController extends Controller
{

    public function showAllPostsJson()
    {   
        $posts = Post::all();        
        return response()->json(Post::all());
    }

    public function showAllPostsXml()
    {   
        $posts = Post::all();
        $array = $posts->toArray();
        $formatter = Formatter::make($array, Formatter::ARR);
        $xml   = $formatter->toXml();
        return $xml;
    } 

    public function showOnePost($id)
    {
        return response()->json(Post::find($id));
    }

    public function create(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function update($id, Request $request)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function delete($id)
    {
        Post::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}