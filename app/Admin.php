<?php

namespace App;


class Admin extends Model
{
    public function products ()
    {
        return $this->hasMany(Product::class);
    }

}
