<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // Set the relationship between post to user
    public function user()
    {
        // this single post belong to only one user
        return $this->belongsTo('App\User');
    }
}
