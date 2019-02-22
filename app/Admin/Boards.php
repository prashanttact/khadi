<?php
namespace App\Admin;
use Illuminate\Database\Eloquent\Model;
class Boards extends Model
{
    protected $fillable = ['id', 'board_name', 'board_title', 'board_images', 'board_employer'];       
    protected $table = 'board_of_directors';
}
