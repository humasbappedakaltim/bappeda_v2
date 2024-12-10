<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule',
        'caption',
        'description',
        'location',
        'views',
        'image',
        'times',
        'dihadiri',
    ];


    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::random(4);
        $this->attributes['slug'] = Str::slug($value);
    }
}
