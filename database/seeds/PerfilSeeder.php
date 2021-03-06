<?php

use Illuminate\Database\Seeder;
use App\Perfil;
class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Perfil::class,1)->create();

        factory(Perfil::class)->create([
            'descripcion'=>'EMA BARRICK'
        ]);

        factory(Perfil::class)->create([
            'descripcion'=>'EMPRESA SAC'
        ]);

        factory(Perfil::class)->create([
            'descripcion'=>'INDIVIDUAL'
        ]);
    }
}
