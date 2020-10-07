<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Roles_price extends Model
{
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'agent_levels_id', 'price', 'minimum_order','quantity', 'postage', 'postage_west_my', 'starter', 'remarks'
    ];
}
