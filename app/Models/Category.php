<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'category_id','name','description','image'
    ];/////

    public function parentCategory()  {
        return $this->hasMany(Category::class);
    }

    public function childCategory()  {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'category_products','category_id','product_id');
    }
}
