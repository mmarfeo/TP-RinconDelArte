<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

//Esta es la tabla intermedia donde un usuario puede tener muchos productos y un carrito puede tener muchos productos
class ProductInCart extends Model
{
  public $table = 'product_in_carts';
  public $primaryKey = ['product_id', 'user_id'];
  public $incrementing = false;

  public function product() {
    return $this->belongsTo('App\Product');
  }

  public function user() {
    return $this->belongsTo('App\User');
  }

  protected function setKeysForSaveQuery(Builder $query) {
      return $query->where('user_id', $this->getAttribute('user_id'))
          ->where('product_id', $this->getAttribute('product_id'));
  }
}
