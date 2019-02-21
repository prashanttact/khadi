<?php
namespace App\Admin;

use DB;

use Illuminate\Database\Eloquent\Model;

class FaqAnswers extends Model
{
    protected $fillable = ['faq_questions_id', 'answer'];
    protected $table = 'faq_answer';

    public function faqQuestion(){

    	return $this->belongsTo('App\Admin\FaqQuestions');

    }
   
}
