<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'program_id',
        'title_en',
        'title_kh',
        'sub_title_en',
        'sub_title_kh',
        'overview_en',
        'overview_kh',
        'outline_en',
        'outline_kh',
        'structure_en',
        'structure_kh',
        'date_from',
        'date_to',
        'price',
        'seat_left',
        'icon_img',
        'img',
        'active',
        'delete'
    ];

    public function scopeNotDelete($q) {
        return $q->where('delete', 0);
    }

    public function scopeActivated($q) {
        return $q->where('active', 1);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function includes()
    {
        return $this->hasMany(CourseInclude::class);
    }

    public function requirements()
    {
        return $this->hasMany(CourseRequire::class);
    }

    public function benefits()
    {
        return $this->hasMany(CourseBenefit::class);
    }

    public function eligibles()
    {
        return $this->hasMany(CourseEligible::class);
    }

    public function processes()
    {
        return $this->hasMany(CourseProcess::class);
    }

    public function locations()
    {
        return $this->hasMany(CourseLocation::class);
    }
}
