<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * 検索フォーム
     */
    public function index()
    {
        return vier('search.index');
    }
}
