<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    // use HasFactory;
    protected $table = "ukm";
    protected $primaryKey = "id_ukm";
    public $timestamps = false;

    protected $fillable = [
        'nama_ukm', 'logo', 'video', 'tentang'
    ];
}
