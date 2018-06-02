<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(
            [
                'name'=>'Admin',
//                'email'=>'admin@email.com',
                'password'=>'123456',
                'cargo_id'=>1,
//                'personal_id'=>1,
                'estado'=>true
            ]
        );

        $rol = Role::create([
           'name'=>'Admin',
           'slug'=>'',
           'special'=>'all-access'
        ]);

        $roles = array($rol->id);

        $user = User::find(1);

        $user->roles()->sync($roles);


        //factory(User::class,5)->create();
    }
}
