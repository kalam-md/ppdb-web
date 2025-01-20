<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PendaftaranSiswa extends Model
{
    use Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_lengkap'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
