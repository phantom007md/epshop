<?php

namespace App;


class Comment extends Model
{
    public function Product ()
    {
        return $this->belongsTo(Product::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
