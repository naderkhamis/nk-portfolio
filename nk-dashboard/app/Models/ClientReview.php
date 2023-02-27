<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    use HasFactory;

    protected $table = 'clients_reviews';

    protected $hidden = ['created_at','updated_at'];
}
