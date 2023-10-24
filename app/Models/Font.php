<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    use HasFactory;

    protected $fillable = [
        'font_name',
        'font_url',
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'font_id');
    }

}
