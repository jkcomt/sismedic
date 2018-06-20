<?php

use Illuminate\Database\Seeder;
use App\PerfilExamen;
class PerfilExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PerfilExamen::class,1)->create();

        for ($i = 2; $i<=18 ; $i++){
            factory(PerfilExamen::class)->create([
                'lista_examen_id'=>$i
            ]);
        }
        for ($i = 1; $i<=10 ; $i++){
            factory(PerfilExamen::class)->create([
                'perfil_id'=>3,
                'lista_examen_id'=>$i
            ]);
        }
        for ($i = 1; $i<=27 ; $i++){
            factory(PerfilExamen::class)->create([
              'perfil_id'=>4,
                  'lista_examen_id'=>$i
            ]);
        }

            // factory(PerfilExamen::class)->create([
            //
            // ]);
            // factory(PerfilExamen::class)->create([
            //     'perfil_id'=>4,
            //     'lista_examen_id'=>4
            // ]);
            // factory(PerfilExamen::class)->create([
            //     'perfil_id'=>4,
            //     'lista_examen_id'=>25
            // ]);
            // factory(PerfilExamen::class)->create([
            //     'perfil_id'=>4,
            //     'lista_examen_id'=>26
            // ]);
            // factory(PerfilExamen::class)->create([
            //     'perfil_id'=>4,
            //     'lista_examen_id'=>27
            // ]);
            //
            // factory(PerfilExamen::class)->create([
            //     'perfil_id'=>1,
            //     'lista_examen_id'=>28
            // ]);
    }
}
