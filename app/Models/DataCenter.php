<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataCenter extends Model
{
    use HasUuids, HasSlug;

    protected $table = "data_centers";

    protected $fillable = [
        'name',
        'file',
        'cover',
        'category_data_center_id',
        'order',
        'slug',
    ];


    public function category()
    {
        return $this->belongsTo(CategoryDataCenter::class, 'category_data_center_id');
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
