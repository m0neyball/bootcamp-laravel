<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = [
    'title',
    'body',
    'published_at'
  ];


  public function setPublishedAtAttribute($date)
  {
    $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    //$this->attributes['published_at'] = Carbon::pass('Y-m-d',$date); = 'Y-m-d 00:00:00'
  }
}
