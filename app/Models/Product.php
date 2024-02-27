<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageProduct;
use App\Models\Variant;
use App\Models\Attribute;
use App\Models\Category;
use App\Traits\Filter;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Product extends Model
{
    use HasFactory,Filter;
    // protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price'
    ];

    public function images(){
        return $this->hasMany(ImageProduct::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_products','product_id','category_id');
    }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class,'product_wishlists');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,'attribute_products','product_id','attribute_id');
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class,'product_variants')->withPivot('addon_price','quantity');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_products')->withPivot('quantity','price')->withTimestamps();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function getMaxPrice()
    {
        return Product::max('price');
    }

    public function getMinPrice()
    {
        return Product::min('price');
    }

}
