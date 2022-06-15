<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'endorse_id','nama','keterangan','harga'
    ];

    public function endorse()
    {
        return $this->belongsTo(Endorse::class);
    }
}
