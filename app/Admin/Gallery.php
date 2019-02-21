<?php
namespace App\Admin;
use Illuminate\Database\Eloquent\Model;
class Gallery extends Model
{
    protected $fillable = ['id', 'gallery_image'];       
    protected $table = 'gallery';
}
