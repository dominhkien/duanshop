<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_sp','id_kc','so_luong','gia'
        ] ;
        protected $table = 'sanpham_kichco';
        public $timestamps = false;
}
