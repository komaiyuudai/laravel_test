<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    // protected $dates = [
    //     'deleted_at',
    // ];

    /**
     * 商品　1対多
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

}
