<?php

namespace App;


class Comment extends Model
{
    public function Product ()
    {
        $this->belongsTo(Product::class);
    }

    public function User()
    {
        $this->belongsTo(User::class);
    }
}
