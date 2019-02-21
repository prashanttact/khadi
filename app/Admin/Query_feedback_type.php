<?php

namespace App\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class Query_feedback_type extends Model
{
        public function query()
    {
        return $this->hasMany('App\Admin\Query');
    }
}
