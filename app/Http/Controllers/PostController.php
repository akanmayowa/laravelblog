<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
  
    public function index()
    {

        return view('admin.posts.index')->with('posts', Post::all());
    }

  
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);
  
        $post = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['image'] = "$profileImage";
        }
    
        Post::create($post);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin.posts.index');
                        
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
