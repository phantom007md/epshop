<?php

use App\Guaranty;
use Illuminate\Database\Seeder;

class GuarantiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Guaranty::class, 10)->create();
    }
}
