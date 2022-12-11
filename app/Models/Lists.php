<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Lists extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'lists';
    protected $fillable = [
        'title',
        'description',
        'slug',
        'created_at',
        'updated_at',
    ];
}
