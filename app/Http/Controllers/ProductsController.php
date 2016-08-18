<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
  public function hair()
  {
    return view('products.hair');
  }

  public function brush()
  {
    return view('products.brush');
  }
}
