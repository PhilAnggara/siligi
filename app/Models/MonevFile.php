<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MonevFile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'monev_files';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function monev()
    {
        return $this->belongsTo(Monev::class, 'id_monev', 'id');
    }
}
