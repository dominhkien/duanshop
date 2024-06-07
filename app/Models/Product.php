<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'anh',
        'ten',
        'mo_ta',
        'id_the_loai',
        'id_thuong_hieu',
        'trang_thai',
    ] ;
    protected $table = 'san_pham';
    public $timestamps = false;
}
