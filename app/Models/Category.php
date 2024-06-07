<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_loai',
    ] ;
    protected $table = 'the_loai';
    public $timestamps =false;
}
