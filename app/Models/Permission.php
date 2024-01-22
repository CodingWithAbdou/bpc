<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    protected $fillable = ['name', 'guard_name', 'model_id'];

    public $timestamps = false;

    public function Role()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions');
    }

    public function ProjectModel()
    {
        return $this->belongsTo(ProjectModel::class, 'model_id');
    }
}
