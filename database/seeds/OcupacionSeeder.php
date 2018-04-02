<?php

use Illuminate\Database\Seeder;
use App\Ocupacion;
class OcupacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ocupacion::class)->create([
            'nombre'=>'tecnico multifuncional'
        ]);
    }
}
