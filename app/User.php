<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function comments ()
    {
        return $this->hasMany(Comments::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
