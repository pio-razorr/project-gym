<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kelas',
        'nama_pelatih',
        'hari',
        'jam',
        'durasi_kelas',
        'image',

    ];

    public function getJamFormattedAttribute()
    {
        return Carbon::parse($this->attributes['jam'])->format('H:i');
    }
}
