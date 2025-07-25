<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bidang extends Model
{
    use HasSlug;

    protected $table = 'bidangs';

    protected $fillable = [
        'name',
        'slug',
    ];


    public function pejabat()
    {
        return $this->belongsToMany(Pejabat::class, 'pejabat_bidang');
    }

    public function sub_bidang()
    {
        return $this->hasMany(SubBidang::class, 'bidang_id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

     public function materiPaparan(): BelongsToMany
    {
        return $this->belongsToMany(MateriPaparan::class, 'materi_paparan_bidangs','materi_paparan_id', 'bidang_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
