<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseEligible extends Model
{
    protected $fillable =[
        'course_id',
        'title_en',
        'title_kh',
        'active',
        'delete'
    ];

    public function scopeNotDelete($q) {
        return $q->where('delete', 0);
    }

    public function scopeActivated($q) {
        return $q->where('active', 1);
    }
}
