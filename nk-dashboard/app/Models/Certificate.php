<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificates';

    public function developer()
    {
        return $this->belongsTo(related: 'App\Models\Developer', foreignKey: 'dev_id');
    }
}