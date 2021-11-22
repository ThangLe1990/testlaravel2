<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAgeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['checkage'])->only('index');
        // only: gán middleware cho hàm nào bên dưới thì thêm vào
    }

    public function index () {
        return view('admin.checkage');
    }

    
}