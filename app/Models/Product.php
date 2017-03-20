<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'store_id',
        'brand_id',
    ];
 
    /**
     * 店舗　多対1
     */
    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }

    /**
     * ブランド　1対多
     */
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

}
