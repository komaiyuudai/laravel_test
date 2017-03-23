<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

    /**
     * 検索フォーム
     */
    public function index()
    {
        return view('search.index');
    }
}
