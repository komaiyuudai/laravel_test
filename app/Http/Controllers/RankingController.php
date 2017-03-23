<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    /**
     * ランキング
     */
    public function index()
    {
        return view('ranking.index');
    }
}
