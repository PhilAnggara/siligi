<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kecamatan';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function desa()
    {
        return $this->hasMany(Desa::class, 'id_kecamatan', 'id');
    }
    public function dataPeta()
    {
        return $this->hasMany(DataPeta::class, 'id_kecamatan', 'id');
    }
}
