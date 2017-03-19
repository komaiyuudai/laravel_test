<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * 店舗一覧
     */
    public function index()
    {
        return vier('shop.index');
    }
}
