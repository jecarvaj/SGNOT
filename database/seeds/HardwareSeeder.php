<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

Class HardwareSeeder extends Seeder
{

    public function run()
    {

        $faker = Faker::create();

        DB::table('alumnos')->insert([

            'alu_rut'=>'18137900-6',
            'alu_nombres'=>'Jean',
            'alu_paterno'=>'Carvajal',
            'alu_materno'=>'Vergara',
            'alu_direccion'=>'Casa',
            'alu_fono'=>'771313',
            'alu_carrera'=>'icinf',
            'alu_correo'=>'jean@c.com',
            'alu_estado'=>'vigente'


        ]);

       DB::table('hardwares')->insert([
            'hard_ram'=>'2gb',
            'hard_procesador'=>'corei7',
            'hard_disco'=>'420gb',
            'hard_video'=>'nvidia 2gb'

        ]);

        DB::table('softwares')->insert([
            'soft_nombre'=>'mcaffe',
            'soft_descripcion'=>'antivirus'
        ]);

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

