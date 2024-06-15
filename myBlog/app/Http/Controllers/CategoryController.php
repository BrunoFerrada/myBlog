<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function getIndex(Request $request) {
        $category_id = $request->input('category_id');
        
        if ($category_id) {
            // Filtrar posts por la categoría seleccionada
            $posts = Post::where('idCategory', $category_id)->where('habilitated', true)->orderBy('created_at', 'desc')->get();
        } else {
            // Obtener todos los posts si no se selecciona ninguna categoría
            $posts = Post::where('habilitated', true)->orderBy('created_at', 'desc')->get();
        }
        $categories = Filter::all(); // Obtener todas las categorías
        $users = User::all(); // Obtener todos los usuarios

        
        
        return view('category/index', compact('posts', 'categories', 'users'));
    }

    public function getShow($id) {
        $post = post::find($id);
        return view('category/show', compact('post'));
    }

    public function getCreate() {
        $objCategory = new FilterController();
        $colCategories = $objCategory->devolverCategorias();
        return view('category/create',  compact('colCategories'));
    }

   
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
            'idCategory' => 'required|exists:categories,idCategory',
          ], [
            'title.required' => 'El título es obligatorio.',
            'title.max' => 'El título no puede tener mas de 100 caracteres.',
            'content.required' => 'El contenido es obligatorio.',
            'idCategory.required' => 'La categoría es obligatoria.',
            'idCategory.exists' => 'La categoría seleccionada no es válida.',
          ]);
          $post = new Post();
          $post->title = $request->title;
          $post->content = $request->content;
          $post->idCategory = $request->idCategory;
          $post->idUserPoster = Auth::id();
          $post->poster = Auth::user()->name;
          $post->save();
          return redirect()->route('category.index')->with('success', 'Post creado con éxito.');
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
