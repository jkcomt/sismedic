<?php

use Illuminate\Database\Seeder;
use App\Pais;
class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = array('Argentina',
            'Bolivia',
            'Brasil',
            'Chile',
            'Colombia',
            'Costa Rica',
            'Cuba',
            'Ecuador',
            'Honduras',
            'México',
            'Nicaragua',
            'Paraguay',
            'Perú');

        for($x = 0; $x < count($paises); $x++) {
            factory(Pais::class)->create([
                'nombre'=>$paises[$x]
            ]);
        }

    }
}
