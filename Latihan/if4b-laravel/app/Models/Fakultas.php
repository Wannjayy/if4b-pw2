<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'fakultas';


    public function prodi(){
        return $this->hasMany(Prodi::class);
    }
}
