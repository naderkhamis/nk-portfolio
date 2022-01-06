<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $table = 'developers';

    public function career()
    {
        return $this->hasMany(related: 'App\Models\Career');
    }

    public function service()
    {
        return $this->hasMany(related: 'App\Models\Service');
    }
}