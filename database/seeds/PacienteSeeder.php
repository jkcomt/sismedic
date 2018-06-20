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
            if($i < 10)
            {
                factory(Paciente::class)->create([
                    'nro_historia'=>'H00000'.$i,
                  //  'perfil_id'=>2
                ]);
            }else if($i >= 10 && $i<=99){
                factory(Paciente::class)->create([
                    'nro_historia'=>'H0000'.$i,
              //      'perfil_id'=>3
                ]);
            }


        }
    }
}
