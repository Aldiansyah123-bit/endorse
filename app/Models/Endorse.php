<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endorse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','age','address','description','price','foto','company','address_company'
    ];
}
