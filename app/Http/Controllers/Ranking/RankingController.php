<?php

namespace App\Http\Controllers\Ranking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    /**
     * ランキング
     */
    public function index()
    {
        return vier('ranking.index');
    }
}
