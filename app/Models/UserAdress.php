<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdress extends Model
{
    use HasFactory;
    protected $fillable=[ 'id', 'user_id', 'state', 'adress', 'phone', 'email', 'name', 'surname', 'city', 'postal_code', 'country', 'created_at', 'updated_at'];
    protected $table='users_addresses';
    public function user()
    {
        return $this->belongesTo(User::class);
    }
}
