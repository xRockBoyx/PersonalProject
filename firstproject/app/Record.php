<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model{
    protected $table = 'records';
    protected $fillable = ['id','rstu_id','time_stamp'];
    public $timestamps = false;
}