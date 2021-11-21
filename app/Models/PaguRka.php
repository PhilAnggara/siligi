<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaguRka extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pagu_rka';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function dinas()
    {
        return $this->belongsTo(Dinas::class, 'id_dinas', 'id');
    }
}
