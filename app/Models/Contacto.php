<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    use HasFactory;
}
