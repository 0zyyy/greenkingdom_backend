<?php

namespace App\Models;

use Binafy\LaravelCart\Cartable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model implements Cartable
{
    use HasFactory;
    public function __construct(array $attributes = [])
    {
        $this->with = ["category",'image'];
    }

    protected $guarded = ["id"];
    protected $hidden = ["category_id", "updated_at"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class,"product_id","id");
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function getPrice(): float
    {
        return $this->harga;
    }

    public function cartItems()
    {
        return $this->morphMany(CartItem::class, 'cartable');
    }
}