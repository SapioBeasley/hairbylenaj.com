<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutsController extends Controller
{
  public function index()
  {
    return view('about.index');
  }
}
