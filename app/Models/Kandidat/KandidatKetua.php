<?php

namespace App\Models\Kandidat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KandidatKetua extends Model
{
    use HasFactory;

    protected $table = 'kandidat_ketua';

    protected $fillable = [
        'name',
        'birth_date',
        'kelas',
        'visi',
        'misi',
    ];

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }
}
