<?php

use Illuminate\Database\Seeder;
use App\Profesion;
class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesion::class)->create([
            'nombre'=>'mecánico'
        ]);
    }
}
