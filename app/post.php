<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

  /**
  * Get the user that created this post.
  */
  public function users()
  {
     return $this->belongsTo('App\Users');
  }

  /**
  * Gets the likes for this post.
  */
  public function likes()
  {
     return $this->hasMany('App\like');
  }

}
