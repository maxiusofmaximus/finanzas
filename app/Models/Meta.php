<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','nombre','monto_objetivo','monto_ahorrado','fecha_limite','created_at','updated_at'];
}
