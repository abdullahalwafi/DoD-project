<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisWisata extends Model
{
    use HasFactory;
    protected $table = 'jenis_wisata';
    protected $guarded = ['id'];

    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'jenis_wisata_id', 'id');
    }
}
