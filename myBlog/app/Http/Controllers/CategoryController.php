<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex() {
        $posts = post::all();
        return view('category/index', compact('posts'));
    }

    public function getShow($id) {
        return view('category/show') . $id;
    }

    public function getCreate() {
        return view('category/create');
    }

    public function getEdit($id) {
        return view('category/edit') .$id;
    }
}
