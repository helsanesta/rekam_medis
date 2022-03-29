<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'username'];

    public function pasien(){
        $this->hasMany(pasien::class);
    }

    public function rekam(){
        $this->hasMany(rekam::class);
    }
}
