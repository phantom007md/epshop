<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
