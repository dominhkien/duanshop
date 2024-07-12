<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        "anh","ten","email","mat_khau","dia_chi"
    ] ;
    protected $table = 'tai_khoan';

    public $timestamps =false;
}
