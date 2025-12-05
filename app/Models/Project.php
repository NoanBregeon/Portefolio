<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'thumbnail',
        'url_repo',
        'url_demo',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
