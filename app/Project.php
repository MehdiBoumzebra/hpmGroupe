<?php

namespace App; 

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Project extends Model
{
    use Translatable,
        Resizable;

    protected $translatable = ['title', 'description', 'notre_mission', 'architecte', 'surface', 'client', 'seo_title', 'slug', 'meta_description', 'meta_keywords'];

    const PUBLISHED = 'PUBLISHED';

    protected $guarded = [];

    /**
     * Scope a query to only published scopes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_categories');
    }

    public function categorieParent()
    {
        return $this->categories()->where('parent_id', null)->first()->slug;
    }

    public function getSlugs() {
        return $this->categories()->pluck('slug')->toArray();
    }
    
    public function getSlugsByName() {
        return $this->categories()->pluck('name')->toArray();
    }

    public function marque()
    {
        return $this->belongsTo('App\Marque');
    }
}
