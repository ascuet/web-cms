<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    	return view('backend.pages.post.list', ['data'=>$posts]);
    }
    public function add()
    {
    	return view('backend.pages.post.add');
    }
    public function store(Request $request){
    	$obj = new Post();
    	$obj->title = $request->title;
    	$obj->description = $request->description;
    	$obj->status = ($request->status === 'on') ? true:false;
    	if($obj->save())
    	{
    		return redirect()->to('/posts');
    	}
    }
}
