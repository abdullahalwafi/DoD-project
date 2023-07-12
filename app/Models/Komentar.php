<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $guarded = ['id'];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
