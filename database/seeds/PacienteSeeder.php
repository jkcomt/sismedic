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
        factory(Paciente::class)->create();
    }
}
