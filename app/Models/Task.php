<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class Task extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'tasks';
    protected $fillable = [
        'title',
        'description',
        'slug',
        'done',
        'list_id',
        'created_at',
        'updated_at',
    ];
}
