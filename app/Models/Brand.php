<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        "ten_thuong_hieu"
    ] ;
    protected $table = 'thuong_hieu';

    public $timestamps =false;
}
