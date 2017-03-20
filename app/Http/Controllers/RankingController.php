<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    /**
     * ランキング
     */
    public function index()
    {
        return view('ranking.index');
    }
}
