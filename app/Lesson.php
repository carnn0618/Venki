<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'course_id',
        'name',
        'description',
        'duration'
    ];


    /** Relationships */

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }
}
