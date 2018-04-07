<?php

use Illuminate\Database\Seeder;
use App\PerfilExamen;
class PerfilExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PerfilExamen::class,1)->create();
    }
}
