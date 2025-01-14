<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $table = 'categorias'; // Caso necessária a mudança de nome das migrations, usar este modelo e trocar no arquivo migrations.
}
