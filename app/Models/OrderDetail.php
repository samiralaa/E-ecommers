<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongesTo(Order::class);
    }
    public function productcolorsize()
    {
        return $this->belongesTo(ProductColorSize::class);
    }
    
}
