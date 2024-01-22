<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    protected $fillable = [ 'title_ar', 'title_en',  'parent_id', 'is_menu','icon', 'order_by' , 'route_key' , 'parent_id' , 'icon'
    , 'model' , 'model_name'];
    public $timestamps = false;

    public function SubModel(){
        return $this->hasMany(ProjectModel::class, 'parent_id')->orderBy('order_by', 'asc');
    }
    public function Permission(){
        return $this->hasMany(Permission::class, 'model_id');
    }
}
