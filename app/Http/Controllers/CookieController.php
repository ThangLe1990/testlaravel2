<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
   function set (Response $response) {
       return $response -> cookie('username', 'Lê thị Thỏ');
    }

   function get (Request $request) {
       return $request -> cookie('username');
    }
}