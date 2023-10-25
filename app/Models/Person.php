<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Person extends Model
{
    protected $fillable = [
        'ci',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_person', 'person_id', 'course_id');
    }
    // public function getFullNameAttribute()
    // {
    //     return "{$this->first_name} {$this->last_name}";
    // }
    // public $additional_attributes = ['full_name'];
}
