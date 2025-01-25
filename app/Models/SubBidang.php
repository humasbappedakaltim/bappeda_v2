<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class SubBidang extends Model
{
    use HasSlug;

    protected $table = 'sub_bidangs';

    protected $fillable = [
        'name',
        'bidang_id',
        'slug',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

    public function pejabats()
    {
        return $this->belongsToMany(Pejabat::class, 'pejabat_sub_bidang');
    }


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
