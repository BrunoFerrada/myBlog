<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilterController extends Controller
{
    public function devolverCategorias()
    {
      $categories = Filter::where('habilitated', 1)->get();
      return $categories;
    } 

}
