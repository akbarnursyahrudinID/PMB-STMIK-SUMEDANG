<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regencie extends Model
{
    // use HasFactory;
    protected $table = "regencies";
    protected $primaryKey = "id_kabupaten";
}
