<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Delivery_address extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'phone_no', 'address_1','address_2', 'postcode', 'city', 'province', 'state','country', 'deleted_at', 'primary','remarks',
    ];

}
