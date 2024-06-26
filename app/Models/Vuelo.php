<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $table = 'vuelos';
    protected $primaryKey = 'numeroVuelo';
    protected $keyType = 'string';
    public $timestamps = false;
}
