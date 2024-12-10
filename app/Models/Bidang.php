<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Bidang extends Model
{
    use HasSlug;

    protected $table = 'bidangs';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function sub_bidang()
    {
        return $this->hasMany(SubBidang::class, 'bidang_id');
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
