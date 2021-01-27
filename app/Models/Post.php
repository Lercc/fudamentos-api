<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];


    /*
    // $hidden
    protected $hidden = ['title' ,'body'];

    // $append
    protected $appends = ['post_uppername', 'post_excerpt'];

    public function getPostUppernameAttribute () {
        return strtolower($this->title);
    }
    public function getPostExcerptAttribute () {
        return substr($this->body,0,10).'...';
    }
    */
}
