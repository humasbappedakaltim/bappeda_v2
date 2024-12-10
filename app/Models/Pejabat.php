<?php

namespace App\Models;

use App\Models\Bidang;
use App\Models\SubBidang;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Pejabat extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'name',
        'foto',
        'nip',
        'golongan',
        'kelas_jabatan',
        'jabatan',
        'jabatan_lainnya',
        'jabatan_lainnya2',
        'bidang_id',
        'sub_bidang_id',
        'status_jabatan',
        'status_jabatan_penjabat',
        'ketua_tim',
        'urutan_jabatan',
        'status_kehadiran',
        'status_aktif',
        'slug',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }


    public function sub_bidang()
    {
        return $this->belongsTo(SubBidang::class);
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
