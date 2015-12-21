<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

Class EquipoSeeder extends Seeder
{

    public function run()
    {

        $faker = Faker::create();

        for($i=0; $i<30; $i++){
            DB::table('equipos')->insert([

                'hard_id'=>1,
                'equ_tipo'=>$faker->randomElement($array = array ('Avanzado','Intermedio','Basico')),
                'equ_marca'=>$faker->company,
                'equ_descripcion'=>$faker->sentence($nbWords = 6),
                'equ_estado'=>$faker->randomElement($array = array ('Disponible','No disponible'))



            ]);
        }

    }
}

