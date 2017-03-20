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
}
