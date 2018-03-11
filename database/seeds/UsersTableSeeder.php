<?php

use App\Comment;
use App\Product;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($u){
            $u->products()->saveMany(factory(Product::class, 5)->make());
        });
    }
}
