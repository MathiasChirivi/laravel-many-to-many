<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Tipe;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tipeIds = Tipe::pluck('id')->all();
        $technologyIds = Technology::pluck('id')->all();

        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->words(3, true);
            $project->description = $faker->text(500);
            $project->repository = $faker->sentence();
            $project->tipe_id = $faker->randomElement($tipeIds);
            $project->save();
            
            $project->tecnologys()->attach($faker->randomElement($technologyIds));
        }
    }
}
