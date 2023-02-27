<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    use HasFactory;

    protected $table = 'skills_categories';

    protected $hidden = ['created_at','updated_at'];

    public function skills()
    {
        return $this->hasMany(related: 'App\Models\Skill');
    }
}
