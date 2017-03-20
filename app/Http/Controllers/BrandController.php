<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Repositories\BrandRepository;
use App\Models\Repositories\ProductRepository;

class BrandController extends Controller
{

    protected $brandRepository;
    protected $productRepository;

    public function __construct(
        BrandRepository $brandRepository,
        ProductRepository $productRepository
    )
    {
        $this->brandRepository = $brandRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * ブランド一覧
     */
    public function index()
    {
        // ブランド一覧取得
        $brands = $this->brandRepository->getBrands();

        return view('brand.index', compact('brands'));
    }

    /**
     * ブランド商品一覧
     */
    public function productList(Request $request)
    {
        dd($request);
        // ブランド商品取得
        $products = $this->productRepository->getBrandProducts();

        return view('brand.product_list', compact('products'));
    }
}
