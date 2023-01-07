<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[ 'id', 'description', 'name', 'logo', 'email', 'favicon', 'phone', 'facebook', 'twitter', 'instagram', 'youtube', 'tiktok', 'linkedin', 'deleted_at', 'created_at', 'updated_at'];
    protected $table='settings';
}
