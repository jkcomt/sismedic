<?php

use Illuminate\Database\Seeder;
use App\TipoExamen;
class TipoExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TipoExamen::class,1)->create();
    }
}
