<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PostNew extends Model
{
    use HasUuids, HasSlug, SoftDeletes;

    protected $table = 'post_news';

    protected $fillable = [
        'title',
        'description',
        'views',
        'user_id',
        'category_id',
        'keywords',
        'tags',
        'image',
        'status',
        'extra_photo',
        'slug',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class,'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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