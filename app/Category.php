<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use Translatable,
        Resizable;
        
    protected $translatable = ['name', 'slug'];
    
    protected $id_marque;

    public function parentId() {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(self::class, 'parent_id','id')->orderBy('order');
    }

    public function childrenMarque() {
        $childrenMarque = $this->hasMany(self::class, 'parent_id','id')
        ->join('project_categories as pc', 'pc.category_id', '=', 'categories.id')
        ->join('projects as p', 'p.id', '=', 'pc.project_id');
        if($this->id_marque != null)
        $childrenMarque->where('p.marque_id', $this->id_marque);
        $childrenMarque->select('categories.id', 'categories.name', 'categories.slug', 'parent_id')
        ->distinct();
        return $childrenMarque;
    }

    public function projects() {
        return $this->belongsToMany(Project::class, 'project_categories');
    }
    
    public function setIdMarque($id_marque) {
        $this->id_marque = $id_marque;
    }
}
