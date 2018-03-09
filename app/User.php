<?php

namespace App;


class User extends Model
{
    public function comments ()
    {
        $this->hasMany(Comments::class);
    }
}
