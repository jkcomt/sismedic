<?php

use Illuminate\Database\Seeder;
use App\LugarLabor;
class LugarLaboresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LugarLabor::class)->create([
            'nombre'=>'superficie'
        ]);
    }
}
