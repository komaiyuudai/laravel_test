<?php

namespace App\Models\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class BrandRepository
{
    /**
     * ブランド一覧取得
     */
    public function getBrands()
    {
        return Brand::select(
            'id',
            'name'
        )->orderBy('name')->get();
    }

    /**
     * ブランドIDに紐づく商品一覧取得
     *
     * @param int $id ブランドID
     */
    public function getBrandProducts($id)
    {
        $q = Brand::query();
        $q->select('id', 'name');
        $q->where('id', $id);
        $q->with([
            'products'  => function ($q) {
                $q->select('id', 'name', 'price', 'brand_id', 'store_id');
            }
        ]);

        return $q->first();
    }


}
