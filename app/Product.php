<?php

namespace App;


class Product extends Model
{
    public function guaranties ()
    {
        return $this->hasMany(Guaranty::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
