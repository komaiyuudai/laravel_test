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
        parent::__construct();
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
    public function detail(Request $request, $brandId)
    {
        // ブランド商品取得
        $brand = $this->brandRepository->getBrandProducts($brandId);

        return view('brand.detail', compact('brand'));
    }
}
