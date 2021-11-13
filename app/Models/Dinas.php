<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dinas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'dinas';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function monev()
    {
        return $this->hasMany(Monev::class, 'id_dinas', 'id');
    }
}
