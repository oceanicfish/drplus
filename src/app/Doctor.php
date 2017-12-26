<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    protected $fillable = ['firstname', 'lastname', 'gender', 'seniority', 'speciality', 'education', 'affiliations', 'language', 'fellowship', 'HMO', 'statement'];
}
