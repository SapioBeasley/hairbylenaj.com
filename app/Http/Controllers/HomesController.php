<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomesController extends Controller
{
  public function index()
  {
    return view('index.index');
  }
}
