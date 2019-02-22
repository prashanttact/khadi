<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EligibilityCriteria extends Model
{
    public function scheme()
    {
        return $this->belongsTo('App\Scheme');
    }
}
