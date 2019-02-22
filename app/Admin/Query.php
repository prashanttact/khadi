<?php

namespace App\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
      public function queryFeedbackType()
    {
        return $this->belongsTo('App\Admin\QueryFeedbackType');
    }

    protected $fillable=['name','email_id','mobile_no','query_feedback_type_id','remark'];
}
