<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guaranty extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function Products ()
    {
        return $this->belongsToMany(Products::class);
    }
}
