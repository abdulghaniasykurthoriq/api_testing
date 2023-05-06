<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosPendakian extends Model
{
    use HasFactory;
    protected $table = "pos_pendakian";
    protected $fillable = [
        'nama',
        'luas_pos',
        'is_warung',
        'is_toilet'
    ];
}
