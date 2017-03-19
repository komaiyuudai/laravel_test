<?php

namespace App\Http\Controllers\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * ブランド一覧
     */
    public function index()
    {
        return vier('brand.index');
    }
}
