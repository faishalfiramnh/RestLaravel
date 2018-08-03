<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_seed_item extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('item')->insert([
            'name' => $faker->name ,
            'description'=> $faker->text,
        ]);
    }
}
