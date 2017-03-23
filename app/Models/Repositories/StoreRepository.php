<?php

namespace App\Models\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class StoreRepository
{
    /**
     * 店舗一覧取得
     */
    public function getStores()
    {
        return Store::select(
            'id',
            'name'
        )->orderBy('name')->get();
    }

    /**
     * 店舗商品取得
     *
     * @param int $id 店舗ID
     */
    public function getStoreProducts($id)
    {
        $q = Store::query();
        $q->select('id', 'name');
        $q->where('id', $id);
        $q->with([
            'products'  => function ($q) {
                $q->select('id', 'name', 'price', 'store_id', 'brand_id');
            }
        ]);

        return $q->first();
    }

}
