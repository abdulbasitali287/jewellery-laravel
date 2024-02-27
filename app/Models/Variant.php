<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Variant extends Model
{
    use HasFactory;
    protected $fillable = ["attribute_id","name","slug"];

    public function attribute()  {
        return $this->belongsTo(Attribute::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class,'product_variants')->withPivot('addon_price','quantity');
    }
}
