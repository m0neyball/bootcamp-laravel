<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
  protected $fillable = [
    'title',
    'body',
    'published_at',
    'user_id'
  ];

  protected $dates = ['published_at'];

  public function scopePublished($query)
  {
    $query->where('published_at','<=', Carbon::now());
  }

  public function scopeUnpublished($query)
  {
    $query->where('published_at','>', Carbon::now());
  }

  /**
   * Get the published_at attribute.
   *
   * @param $date
   */
  public function setPublishedAtAttribute($date)
  {
    $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    //$this->attributes['published_at'] = Carbon::pass('Y-m-d',$date); = 'Y-m-d 00:00:00'
  }

  /**
   * Get the published_at attribute.
   *
   * @param $date
   *
   * @return string
     */
    public function getPublishedAtAttribute($date)
  {
    return Carbon::parse($date)->format('Y-m-d');
  }

  /**
   * An article is owned by User
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }


  /**
   * Get the tags associated with the given article.
   *
   * @return BelongsToMany
   */
  public function tags()
  {
    return $this->belongsToMany(Tag::class)->withTimestamps();
  }

  /**
   * Get a list of tag ids associated with the current article.
   *
   * @return array
   */
  public function getTagListAttribute()
  {
    return $this->tags->lists('id')->toArray();
  }
}
