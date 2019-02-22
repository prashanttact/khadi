<?php
namespace App\Admin;

use DB;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = ['id', 'title', 'slug', 'keyword', 'description','content', 'status'];
    protected $table = 'pages';

   
}
