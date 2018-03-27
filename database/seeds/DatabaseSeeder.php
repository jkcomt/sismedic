<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTables(
            [
                'personales',
                'cargos',
                'users'
            ]
        );
        // $this->call(UsersTableSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(UserSeeder::class);
        //$this->call(LoteSeeder::class);

    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
