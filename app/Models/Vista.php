<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vista extends Model
{
    use HasFactory;
    protected $fillable = ['nomvista','nomvue','ruta','activo'];
    protected $primaryKey = 'idv';  
}
