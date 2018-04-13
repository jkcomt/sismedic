<?php

use Illuminate\Database\Seeder;
use App\CitaExamen;
class CitaExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=9; $i++) { 
        factory(CitaExamen::class)->create([
        	  'item_examen_id'=>16,
        ]);
        	
        }
    }
}
