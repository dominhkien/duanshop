<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'gio_hang';

    protected $fillable = [
        'id_kh',
        'id_sp_kc',
        'so_luong'
    ];
    public $timestamps =false;

}
