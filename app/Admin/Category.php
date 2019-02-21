<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      public function faq()
    {
        return $this->hasMany('App\Admin\Faq');
    }
}
