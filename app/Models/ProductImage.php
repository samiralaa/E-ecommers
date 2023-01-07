<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable=['id','product_color_size_id','created_at','updated_at' ];
    protected $table='product_image';
    public function productcolorsize()
    {
        return $this->belongesTo(ProductColorSize::class);
    }

}
