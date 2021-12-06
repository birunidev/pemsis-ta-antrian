<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "antrians";
    protected $guarded = ['antrian_id'];
    protected $primaryKey = 'antrian_id';
}
