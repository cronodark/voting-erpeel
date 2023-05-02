<?php

namespace App\Models\Vote;

use App\Models\Kandidat\KandidatKetua;
use App\Models\Kandidat\KandidatWakil;
use App\Models\User\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'vote';

    protected $fillable = [
        'siswa_id',
        'kandidatKetua_id',
        'kandidatWakil_id',
    ];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function kandidat_ketua()
    {
        return $this->belongsTo(KandidatKetua::class);
    }
    public function kandidat_wakil()
    {
        return $this->belongsTo(KandidatWakil::class);
    }
}
