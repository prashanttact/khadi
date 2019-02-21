<?php

namespace App\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class QueryFeedbackType extends Model
{
        public function queryTable()
    {
        return $this->hasMany('App\Admin\Query');
    }
}
