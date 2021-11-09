<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $package = [
                "code" => $faker->randomNumber(8, true),
                "title" => $faker->sentence(),
                "description" => $faker->paragraph(),
                "city" => $faker->word(),
                "hotel" => $faker->word(),
                "from" => $faker->date(),
                "to" => $faker->date(),
                "price" => $faker->randomFloat(2, 90, 999999),
            ];
            $newPackage = new Package();
            foreach ($package as $key => $value) {
                $newPackage[$key] = $value;
            }
            $newPackage->save();
        }
    }
}
