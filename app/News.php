<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = "news";
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
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
