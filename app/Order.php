<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public function OrdersProduct() {
        return $this->hasMany('App\OrderProduct', 'order_id');
      }

      protected $fillable = [
        'total',
    ];
  }

