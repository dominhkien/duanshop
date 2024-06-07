<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = [
        "kich_co"
    ] ;
    protected $table = "kich_co";
    public $timestamps = false;
}
