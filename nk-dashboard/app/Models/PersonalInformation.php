<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $table = 'personal_information';

    // public function career()
    // {
    //     return $this->hasMany(related: 'App\Models\Career');
    // }

    // public function certificates()
    // {
    //     return $this->hasMany(related: 'App\Models\Certificate');
    // }

    // public function clientsReviews()
    // {
    //     return $this->hasMany(related: 'App\Models\ClientReview');
    // }

    // public function processes()
    // {
    //     return $this->hasMany(related: 'App\Models\Process');
    // }

    // public function projects()
    // {
    //     return $this->hasMany(related: 'App\Models\Project');
    // }

    // public function contactInformation()
    // {
    //     return $this->hasMany(related: 'App\Models\ContactInformation');
    // }

    // public function services()
    // {
    //     return $this->hasMany(related: 'App\Models\Service');
    // }

    // public function skills()
    // {
    //     return $this->hasMany(related: 'App\Models\Skill');
    // }

    // public function socialAccounts()
    // {
    //     return $this->hasMany(related: 'App\Models\SocialAccount');
    // }

    // public function statistics()
    // {
    //     return $this->hasMany(related: 'App\Models\Statistic');
    // }

}
