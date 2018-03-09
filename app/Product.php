<?php

namespace App;


class Product extends Model
{
    public function guaranties ()
    {
        return $this->belongsToMany(Guaranty::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function comments ()
    {
        $this->hasMany(Commets::class);
    }

}
