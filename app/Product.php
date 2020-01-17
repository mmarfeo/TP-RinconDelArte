<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      public $table = "products";
      public $primaryKey = "id";
      // public $timestamps = false;
      // public $guarded = [];

      protected $fillable = [
            'name', 'description', 'price', 'img', 'products_active1', 
        ];
}
