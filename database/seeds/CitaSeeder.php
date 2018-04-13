<?php

use Illuminate\Database\Seeder;
use App\Paciente;
use App\Cita;
use App\Event;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        for ($i=1; $i <=9; $i++) { 
		$paciente= Paciente::find($i);
        factory(Cita::class)->create([
        	'paciente_id'=>$paciente->id,
        	'nro_serie_cita'=>'#00000'.$i
        ]);

        Event::create([
        	'title'=>$paciente->apellido_paterno." ".$paciente->apellido_materno." ".$paciente->nombres,
        	'start_date'=>\Carbon\Carbon::now()->toDateString(),
        	'end_date'=>\Carbon\Carbon::now()->toDateString(),
        	'color'=>'#00C1DE',
        	'cita_id'=>$i,
        	'estado'=>true
        ]);
        	
        }
    }
}
