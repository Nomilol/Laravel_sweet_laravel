<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sweet;
class SweetController extends Controller
{
  public function addCandy(Request $request) {
    $candy = new Sweet;
    $candy->name = $request->name;
    $candy->stock = $request->stock;
    $candy->save();
    return view('index');

    }
}
