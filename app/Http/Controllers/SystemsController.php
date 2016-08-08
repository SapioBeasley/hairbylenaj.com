<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SystemsController extends Controller
{
  public function index()
  {
    return view('systems.index');
  }
}
