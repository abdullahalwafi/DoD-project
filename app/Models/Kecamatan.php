<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $guarded = ['id'];
    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'kecamatan_id', 'id');
    }
}
