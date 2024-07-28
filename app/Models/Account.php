<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        "anh","ten","email","password","dia_chi"
    ] ;
    protected $table = 'users';

    public $timestamps =false;
}
