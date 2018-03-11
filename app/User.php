<?php

namespace App;


class User extends Model
{
    public function comments ()
    {
        return $this->hasMany(Comments::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
