<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // function add(Request $request) {
    //     $request -> session() -> put('username', 'Le Thang 23');
    // }

    // function show(Request $request) {
    //     return $request -> session() -> get('username');
    // }

    function add_flash(Request $request) {
        $request -> session() ->flash('message','Hello Friends');
    }
    function show(Request $request) {
        return $request -> session() -> get('message');
    }
}