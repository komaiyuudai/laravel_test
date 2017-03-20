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

}
