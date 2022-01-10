<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $table = 'projects_categories';

    public function projects()
    {
        return $this->hasMany(related: 'App\Models\Project');
    }
}