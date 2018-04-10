<?php

use Illuminate\Database\Seeder;
use App\ClienteCuenta;
class ClienteCuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClienteCuenta::class,1)->create();
    }
}
