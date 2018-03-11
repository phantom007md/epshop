<?php

namespace App;


class Product extends Model
{
    public function guaranties ()
    {
        return $this->belongsToMany(Guaranty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments ()
    {
        return $this->hasMany(Commets::class);
    }

}
