<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'username'];

    public function dokter(){
        $this->belongsTo(dokter::class);
    }
    public function rekam(){
        $this->hasOne(rekam::class);
    }
}
