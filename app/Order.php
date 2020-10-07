<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seller_id', 'buyer_id', 'buyer_type', 'status','total', 'shipping_address', 'city', 'state', 'country','postcode', 'tracking_no', 'deleted_at','remarks',
    ];
}
