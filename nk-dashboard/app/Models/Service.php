<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    public function developer()
    {
        return $this->belongsTo(related: 'App\Models\Developer', foreignKey: 'dev_id');
    }
}