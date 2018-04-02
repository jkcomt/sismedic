<?php

use Illuminate\Database\Seeder;
use App\TipoInstruccion;
class TipoInstruccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TipoInstruccion::class)->create([
            'nombre'=>'tecnica'
        ]);
        factory(TipoInstruccion::class)->create([
            'nombre'=>'universitaria'
        ]);
    }
}
