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

        for ($i = 2; $i<=11 ; $i++){
            factory(PerfilExamen::class)->create([
                'lista_examen_id'=>$i
            ]);
        }

        for ($i = 1; $i<=5 ; $i++){
            factory(PerfilExamen::class)->create([
                'perfil_id'=>2,
                'lista_examen_id'=>$i
            ]);
        }
    }
}
