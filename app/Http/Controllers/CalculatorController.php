<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index($pVar)
    {
      $categories = \App\Category::paginate(1);
      return view('greet')->withCategories($categories);
    }
}
