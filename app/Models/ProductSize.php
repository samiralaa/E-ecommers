<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable=['id', 'product_id', 'size', 'created_at', 'updated_at'];
    protected $table='products_size';
    public function product()
    {
        return $this->belongesTo(Product::class);
    }
    public function productcolorsize()
    {
        return $this->hasMany(ProductColorSize::class);
    }

}
