<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function getIndex(Request $request) {
        $category_id = $request->input('category_id');
        
        if ($category_id) {
            // Filtrar posts por la categoría seleccionada
            $posts = Post::where('idCategory', $category_id)->where('habilitated', false)->orderBy('created_at', 'desc')->get();
        } else {
            // Obtener todos los posts si no se selecciona ninguna categoría
            $posts = Post::where('habilitated', false)->orderBy('created_at', 'desc')->get();
        }

        
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
        $post = post::find($id);
        return view('category.edit', compact("post")) ;
    }

    public function update(Request $request, $post) {
       
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        $post = post::find($post);

        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->poster = Auth::user()->name;
        $post->save();

        return redirect("/category/show/".$post->id);
    }

    public function destroy($post) {
        $post = post::find($post);
        $post->habilitated = true;
        $post->save();
        
        return redirect("/category");
    }

}
