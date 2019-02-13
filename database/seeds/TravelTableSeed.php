<?php

use Illuminate\Database\Seeder;

class TravelTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Travel::class, 200)->create();
    }
}
