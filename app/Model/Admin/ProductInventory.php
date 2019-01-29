<?php

namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;

class ProductInventory extends Model
{
    protected $fillable = ['created_at','updated_at'];

    public function images(){
        return $this->belongsTo(ProductImage::class,'id','inventory_id');
    }
}
