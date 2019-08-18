<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //繼承資料庫裡原有的資料表news
    protected $table = 'news';
    protected $fillable = ['title','description'];
}
