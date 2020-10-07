<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Payment extends Model
{
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'payment_method_id', 'bill_id', 'total','status', 'ref_id', 'deleted_at', 'remarks'
    ];

}
