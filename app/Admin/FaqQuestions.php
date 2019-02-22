<?php
namespace App\Admin;

use DB;

use Illuminate\Database\Eloquent\Model;

class FaqQuestions extends Model
{
    protected $fillable = ['question', 'image'];
    protected $table = 'faq_questions';


    public function faqAnswer(){

    	return $this->hasOne('App\Admin\FaqAnswers', 'faq_questions_id');

    }

   
}