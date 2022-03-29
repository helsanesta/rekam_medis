<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekam extends Model
{
    use HasFactory;

    protected $fillable = ['kondisi', 'suhu'];

    public function dokter(){
        $this->belongsTo(dokter::class);
    }

    public function pasien(){
        $this->belongsTo(pasien::class);
    }
}
