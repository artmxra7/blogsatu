<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Post extends Model
{

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateAttribute($value)
    {
        return $this->created_at->diffForHumans();
    }

    public function getImageUrlAttribute($value)
    {
        $imageurl = "";

        if(! is_null($this->image))
        {
            $imagePath = public_path() . "/img/" . $this->image;
            if (file_exists($imagePath)) $imageurl = asset ("img/" . $this->image);
        }
        return $imageurl;
    }

    public function scopeLatestFirst()
    {
        return $this->orderBy('created_at', 'desc');
    }

}
