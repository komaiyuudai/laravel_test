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
        parent::__construct();
        $this->productRepository = $productRepository;
    }

    /**
     * 商品詳細
     */
    public function detail(Request $request, $storeId, $brandId, $productId)
    {
        // 商品取得
        $product = $this->productRepository->getProduct($productId);

        return view('product/detail', compact('product'));
    }

    /**
     * api 新着商品取得
     */
    public function getNewProduct()
    {
        $products = $this->productRepository->getNewProducts();
        $sendDatas = $products->map(function ($item){
            return [
                'url'           => '/' . $item->store_id . '/' . $item->brand_id . '/' . $item->id,
                'product_name'  => $item->name,
                'price'         => number_format($item->price),
                'store_name'    => $item->store->name,
                'brand_name'    => $item->brand->name,
            ];
        });

        return response()->json($sendDatas->toArray(), 200);
    }
}
