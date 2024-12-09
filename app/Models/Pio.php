<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Pio extends Model
{
    use HasUuids, HasSlug, SoftDeletes;

    protected $fillable = [
        'name',
        'nik',
        'email',
        'ktp',
        'jenis',
        'akta_kelahiran',
        'telp',
        'faksimili',
        'alamat',
        'rincian',
        'tujuan_penggunaan',
        'status',
        'slug',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
