<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcolor extends Model
{
    use HasFactory;
    protected $fillable=['id', 'status', 'adress', 'phone', 'email', 'name', 'surname', 'city', 'postal_code', 'country', 'deleted_at', 'created_at', 'updated_at'];
    protected $table='orders_details';
    public function product()
    {
        return $this->belongesTo(Product::class);
    }
    public function productcolorsize()
    {
        return $this->hasMany(ProductColorSize::class);
    }
}
