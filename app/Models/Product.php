<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images()
     {
         return $this->hasMany(ProductImage::class, 'product_id');
     }
 
     public function firstImage()
     {
         return $this->hasOne(ProductImage::class);
     }
 
 
     protected  static  function  boot()
     {
         parent::boot();
 
         static::creating(function  ($model)  {
             $model->uuid = (string) Str::uuid();
         });
     }
}
