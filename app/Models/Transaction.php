<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_invoice','endorse_id','name','phone','address','note','foto'
    ];

    public function endorse()
    {
        return $this->belongsTo(Endorse::class);
    }
}
