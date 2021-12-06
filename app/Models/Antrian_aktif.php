<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian_aktif extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_antrian';
    protected $guarded = [];
}