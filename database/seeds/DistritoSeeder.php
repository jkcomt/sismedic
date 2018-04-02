<?php

use Illuminate\Database\Seeder;
use App\Distrito;
class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Distrito::class,1)->create();
    }
}
