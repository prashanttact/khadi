<?php

namespace App\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['news_title', 'news_desc','news_date', 'news_status', 'news_img_path'];
    protected $table = 'news';
}
