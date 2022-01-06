<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    use HasFactory;

    protected $table = 'skills_categories';

    public function skills()
    {
        return $this->hasMany(related: 'App\Models\Skill');
    }
}