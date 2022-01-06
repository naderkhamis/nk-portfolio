<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    use HasFactory;

    protected $table = 'clients_reviews';

    public function developer()
    {
        return $this->belongsTo(related: 'App\Models\Developer', foreignKey: 'dev_id');
    }
}