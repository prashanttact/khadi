<?php

namespace App\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['faq_question','faq_answer','category_id'];
    protected $table = 'faqs';


    public function category()
    {
        return $this->belongsTo('App\Admin\Category');
    }
}
