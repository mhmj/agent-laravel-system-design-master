<?php

namespace App;

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
        'product_type_id', 'name', 'description', 'retail_price','featured_image', 'images', 'weight', 'stock', 'shipping_west_my','shipping_east_my', 'shipping_bn', 'shipping_sg','score','remarks'
    ];

}
