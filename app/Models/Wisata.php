<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $guarded = ['id'];
    public function jenisWisata()
    {
        return $this->belongsTo(JenisWisata::class);
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'wisata_id', 'id');
    }
}