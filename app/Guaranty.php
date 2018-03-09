<?php

namespace App;


class Guaranty extends Model
{
    public function Products ()
    {
        $this->belongsToMany(Products::class);
    }
}
