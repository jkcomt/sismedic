<?php

use Illuminate\Database\Seeder;
use App\GrupoSanguineo;
class GrupoSanguineoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GrupoSanguineo::class)->create([
            'descripcion'=>'O RH POSITIVO'
        ]);
    }
}
