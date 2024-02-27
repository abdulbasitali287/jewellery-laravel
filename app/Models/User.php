<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'image',
        'company_name',
        'street_address',
        'city',
        'state',
        'zip_code',
        'phone',
        'amount_total',
        'payment_type',
        'role',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function categories(){
        return Category::all();
    }

    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function checkWishlist($productId)  {
        return $this->wishlists()->whereHas('products', function($query) use ($productId){
            $query->where('products.id',$productId);
        })->exists();
    }
}
