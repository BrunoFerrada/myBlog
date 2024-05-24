<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category/index');
    }

    public function show($id) {
        return view('category/show') . $id;
    }

    public function create() {
        return view('category/create');
    }

    public function edit($id) {
        return view('category/edit') .$id;
    }
}
