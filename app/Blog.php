<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   public static function getBlogs()
   {
   		return self::latest()->paginate(5);
   }
}
