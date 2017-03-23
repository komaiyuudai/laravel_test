<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Repositories\ProductRepository;

class TopController extends Controller
{
    protected $productRepository;

    public function __construct(
        ProductRepository $productRepository
    )
    {
        parent::__construct();
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        // 最新商品10件
        $newProducts = $this->productRepository->getNewProducts();

        return view('top/index', compact('newProducts'));
    }
}
