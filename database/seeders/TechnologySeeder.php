<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        {
            $techArray = config('tecnology');
            foreach ($techArray as $tech) {
                $newTech = new Technology();
                $newTech->name = $tech['name'];
                $newTech->save();
            }
        }
    }
}
