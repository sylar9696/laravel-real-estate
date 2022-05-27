<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Agent;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $agent = new Agent();
            $agent->nome = $faker->firstName();
            $agent->cognome = $faker->lastName();
            $agent->ruolo = $faker->word();
            $agent->save();
        }
    }
}
