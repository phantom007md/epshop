<?php

namespace App;


class Guaranty extends Model
{
    public function Products ()
    {
        return $this->belongsToMany(Products::class);
    }
}
