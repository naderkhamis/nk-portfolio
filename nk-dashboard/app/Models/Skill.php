<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $hidden = ['created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(related: 'App\Models\SkillCategory', foreignKey: 'cat_id');
    }
}
