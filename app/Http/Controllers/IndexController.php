<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = 100;
        $assign = [
            'products'  => $products,
        ];

        return view('index/index', $assign);
    }
}
