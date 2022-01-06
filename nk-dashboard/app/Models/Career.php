<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = 'career';

    public function developer()
    {
        return $this->belongsTo(related: 'App\Models\Developer', foreignKey: 'dev_id');
    }
}