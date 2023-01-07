<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable=['id', 'product_color_id', 'product_size_id', 'quantity', 'price_tow', 'discount', 'status', 'created_at', 'updated_at'];
    protected $table='products_colors_size';
    public function productcolor()
    {
        return $this->belongesTo(Productcolor::class);
    }
    public function productsize()
    {
        return $this->belongesTo(ProductSize::class);
    }
}
