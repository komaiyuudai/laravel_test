<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * 検索フォーム
     */
    public function index()
    {
        return view('search.index');
    }
}
