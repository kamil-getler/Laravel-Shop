<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
 public function show()
 {
     return view(view :'hello');
 }
}
