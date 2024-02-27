<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;
use App\Models\Product;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = ["name","slug"];

    public function variants(){
        return $this->hasMany(Variant::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class,'attribute_products','attribute_id','product_id');
    }
}
