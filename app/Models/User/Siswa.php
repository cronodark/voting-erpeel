<?php

namespace App\Models\User;

use App\Models\User;
use App\Models\Vote\Vote;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'user_id',
        'kelas_id',
        'nisn',
        'nis',
        'nama',
        'jenkel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }
}
