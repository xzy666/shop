<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 购物车
 * @package App
 */
class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = ['product_id', 'qty', 'attribute'];
}
