<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'project_id', 'category_id'
    ];
}
