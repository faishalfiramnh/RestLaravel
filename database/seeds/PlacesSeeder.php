<?php

use Illuminate\Database\Seeder;
use App\Http\Controller\PlacesController;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 100) as $i) {
          $simpan = $faker->domainName();
          // PlacesController::create([
          //   'name' =>$faker->streetName.' Places',
          //   'namaTempat' =>$faker->namaTempat,
          //   'longtitude' =>$faker->longtitude,
          //   'lotitude' =>$faker->lotitude
          // ]);
        }
    }
}
