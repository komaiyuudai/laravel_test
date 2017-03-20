<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(
        ProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return view('product/index', compact('newProducts'));
    }
}
