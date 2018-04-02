<?php

use Illuminate\Database\Seeder;
use App\Altura;
class AlturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Altura::class)->create([
            'descripcion'=>'4001 a 4500m'
        ]);
    }
}
