<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable  = ['title', 'content'];

    public function comments() {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function image() {
        return $this->hasOne(Image::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the image's owner.
     */
    public function imageArtist()
    {
        return $this->hasOneThrough(Artist::class, Image::class);
    }


     /**
 * Get the user's most recent Comment.
 */
public function latestComment()
{
    return $this->hasOne(Comment::class)->latestOfMany();
}


/**
 * Get the user's oldest comment.
 */
public function oldestComment()
{
    return $this->hasOne(Comment::class)->oldestOfMany();
}


}
