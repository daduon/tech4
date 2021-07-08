<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable =[
        'name_en',
        'active',
        'delete'
    ];
    public function scopeNotDelete($q) {
        return $q->where('delete', 0);
    }

    public function scopeActive($q) {
        return $q->where('active', 1);
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
    public function benefit()
    {
        return $this->hasMany(Benefit::class);
    }


}
