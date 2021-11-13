<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monev extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'monev';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function files()
    {
        return $this->hasMany(MonevFile::class, 'id_monev', 'id');
    }
    public function latestUpload()
    {
        return $this->hasOne(MonevFile::class, 'id_monev', 'id')->latest();
    }
    public function tr1()
    {
        return $this->hasMany(MonevFile::class, 'id_monev', 'id')->where('triwulan', 1);
    }
    public function tr2()
    {
        return $this->hasMany(MonevFile::class, 'id_monev', 'id')->where('triwulan', 2);
    }
    public function tr3()
    {
        return $this->hasMany(MonevFile::class, 'id_monev', 'id')->where('triwulan', 3);
    }
    public function tr4()
    {
        return $this->hasMany(MonevFile::class, 'id_monev', 'id')->where('triwulan', 4);
    }
}
