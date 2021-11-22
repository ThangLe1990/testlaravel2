<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

class HelperController extends Controller
{
    function url() {
        //make URL
        // $url = url('login');
        // echo $url;

        // make URL via route
        // $url =  route('helper.url');

        $url = url()->current();

        echo $url;
    }

    function string() {
        
        $str_1 = "Le Thang";
            // return Str::length ($str_1);
            // return Str::lower ($str_1);
            // return Str::upper ($str_1); 
        // $str =  Str::of($str_1)->trim();
        // echo $str;

        echo Str::of($str_1) -> substr(4);


    }
} 