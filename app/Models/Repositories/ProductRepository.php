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
        )->orderBy('updated_at', 'desc')->get();
    }

    /**
     * 指定商品取得
     *
     * @param int $id 商品ID
     */
    public function getProduct($id)
    {
        return Product::select(
            'id',
            'name',
            'price',
            'store_id',
            'brand_id'
        )->where('id', $id)->first();
    }

    /**
     * TOP表示用新着商品一覧取得
     */
    public function getNewProducts()
    {
        return Product::select(
            'id',
            'name',
            'price',
            'store_id',
            'brand_id'
        )->orderBy('updated_at', 'desc')->take(config('const.new_product'))->get();
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
