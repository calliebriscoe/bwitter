<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
  /**
  * Get the user that created this post.
  */
  public function users()
  {
     return $this->belongsTo('App\Users');
  }

  /**
  * Gets the posts for this like.
  */
  public function posts()
  {
     return $this->hasMany('App\posts');
  }
}
