<?php
namespace App\Admin;
use Illuminate\Database\Eloquent\Model;
class Alerts extends Model
{
    protected $fillable = ['id', 'alert_desc', 'alert_date', 'alert_image'];       
    protected $table = 'alert';
}
