<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'description', 'image_url'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function hasAccess($news)
    {
        return $this->isAdmin();
    }
}
