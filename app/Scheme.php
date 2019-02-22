<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
       public function eligibility()
    {
        return $this->hasMany('App\EligibilityCriteria');
    }
}
