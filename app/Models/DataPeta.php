<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPeta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_peta';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }
    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }
}
