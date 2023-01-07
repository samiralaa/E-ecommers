<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'status', 'payment_id', 'payment_method', 'payment_status', 'total_price', 'adress', 'phone', 'email', 'name', 'surname', 'city', 'postal_code', 'country', 'created_at', 'updated_at' ];
    protected $table ='categories';
    public function child()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class,'categories_id');
    }
}
