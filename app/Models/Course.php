<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    protected $fillable = [
        'course_name',
        'img_certificate',
        'x',
        'y',
        // Otros campos aquí
    ];
    public function students()
    {
        return $this->belongsToMany(Person::class, 'course_person', 'course_id', 'person_id');
    }
}
