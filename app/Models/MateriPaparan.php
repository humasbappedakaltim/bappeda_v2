<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MateriPaparan extends Model
{
    use HasFactory, HasSlug;


    protected $fillable = [
        "name",
        "file",
        "cover",
        "category_paparan_id",
        "category_information",
        "status",
        "slug",
    ];


    public function bidangs(): BelongsToMany
    {
        return $this->belongsToMany(Bidang::class, 'materi_paparan_bidangs','materi_paparan_id', 'bidang_id');
    }

    public function categoryPaparan(): BelongsTo
    {
        return $this->belongsTo(KategoriPaparan::class, 'category_paparan_id', 'id');
    }

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
