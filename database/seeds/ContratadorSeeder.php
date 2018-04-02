<?php

use Illuminate\Database\Seeder;
use App\Contratador;
class ContratadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contratador::class)->create([
            'nombre'=>'MBM'
        ]);
    }
}
