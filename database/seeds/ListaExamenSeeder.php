<?php

use Illuminate\Database\Seeder;
use App\ListaExamen;
class ListaExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ListaExamen::class,1)->create();
    }
}
