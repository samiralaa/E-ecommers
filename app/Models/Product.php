<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['id', 'name', 'description', 'price', 'image', 'discount_price', 'categories_id', 'deleted_at', 'created_at', 'updated_at'];
    protected $table='products';
    public function category()
    {
        return $this->belongesTo(Category::class,'categories_id');
    }
    public function productcolorsize()
    {
        return $this->hasMany(ProductColorSize::class);
    }
    public function productsize()
    {
        return $this->hasMany(ProductSize::class);
    }
    public function productcolor()
    {
        return $this->hasMany(Productcolor::class);
    }
}
