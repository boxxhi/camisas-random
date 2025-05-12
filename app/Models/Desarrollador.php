<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desarrollador extends Model
{
    use HasFactory;

    //
    protected $table = "desarrolladores";

    protected $fillable = ["nombre","correo"];
}
