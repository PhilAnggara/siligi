<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Renja extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'renja';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
