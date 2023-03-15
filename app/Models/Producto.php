<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre', 'descripcion', 'precio', 'categoria', 'imagen'
    ];
    public $table ="productos";

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
}
