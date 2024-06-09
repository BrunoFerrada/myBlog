<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function getIndex() {
        $posts = post::orderBy('id','desc')->get();
        return view('category/index', compact('posts'));
    }

    public function getShow($id) {
        $post = post::find($id);
        return view('category/show', compact('post'));
    }

    public function getCreate() {
        return view('category/create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->poster = Auth::user()->name;
        $post->save();

        return redirect("/category");
    }

    public function getEdit($id) {
        return view('category/edit') .$id;
    }
    

    public function edit($id) {
        $post = Post::findOrFail($id);

        if (Auth::user()->name != $post->user->name) {
            return redirect('/category')->with('error', 'No tienes permisos para editar este post');
        }

        return view('category.edit', compact('post'));
    }

}
