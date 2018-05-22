<?php

use Illuminate\Database\Seeder;
use App\TipoExamen;
class TipoExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TipoExamen::class,1)->create();

        factory(TipoExamen::class)->create([
            'descripcion'=>'PRE-OCUPACIONAL',
            'estado'=>true,
        ]);
        factory(TipoExamen::class)->create([
            'descripcion'=>'PERIODO ANUAL',
            'estado'=>true,
        ]);
        factory(TipoExamen::class)->create([
            'descripcion'=>'RETIRO',
            'estado'=>true,
        ]);
        factory(TipoExamen::class)->create([
            'descripcion'=>'INDIVIDUAL - LABORATORIO',
            'estado'=>true,
        ]);

    }
}
