<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endorse extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','umur','alamat','instagram','number','tinggi','berat','foto','minat'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
