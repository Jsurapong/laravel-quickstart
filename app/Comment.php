<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //

    public function post()
    {

        return $this->belongsTo(Post::class);

    }

    
}
