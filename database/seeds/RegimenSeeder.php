<?php

use Illuminate\Database\Seeder;
use App\Regimen;
class RegimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Regimen::class)->create([
            'descripcion'=>"DIA/NOCHE"
        ]);
    }
}
