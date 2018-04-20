<?php

use Illuminate\Database\Seeder;
use App\Paciente;
class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=50; $i++) { 
        factory(Paciente::class)->create([
        	'nro_historia'=>'H00000'.$i
        ]);

        }
    }
}
