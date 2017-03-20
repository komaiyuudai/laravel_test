<?php

namespace App\Models\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductRepository
{
    /**
     * 商品一覧取得
     */
    public function getProducts()
    {
        return Product::select(
            'id',
            'name',
            'price',
            'store_id',
            'brand_id'
        )->orderBy('updated_at', 'desc')->take(10)->get();
    }

    /**
     * ブランドに紐づく商品取得
     *
     * @param int $brandId ブランドID
     */
    public function getBrandProducts($brandId)
    {
        return Product::select(
            'id',
            'name',
            'price'
        )->where('brand_id', $brandId)->orderBy('updated_at', 'desc')->get();
    }
}
