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
                'perfiles',
                'users',
                'personales',
                'cargos',
                'users',
                'paises',
                'departamentos',
                'provincias',
                'distritos',
                'tipo_instrucciones',
                'contratadores',
                'ocupaciones',
                'lugar_labores',
                'profesiones',
                'areas',
                'alturas',
                'regimenes',
                'cliente_cuentas',
                'tipo_examenes',
                'lista_examenes',
                'perfil_examenes',
                'pacientes'
            ]
        );
        // $this->call(UsersTableSeeder::class);
        $this->call(PerfilSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(DistritoSeeder::class);
        $this->call(TipoInstruccionSeeder::class);
        $this->call(ContratadorSeeder::class);
        $this->call(OcupacionSeeder::class);
        $this->call(LugarLaboresSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(AlturasSeeder::class);
        $this->call(GrupoSanguineoSeeder::class);
        $this->call(RegimenSeeder::class);
        $this->call(ClienteCuentasSeeder::class);
        $this->call(TipoExamenSeeder::class);
        $this->call(ListaExamenSeeder::class);
        $this->call(PerfilExamenSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(PermissionTableSeeder::class);
      //  $this->call(CitaSeeder::class);
        //$this->call(CitaExamenSeeder::class);


//        $this->call(EventSeeder::class);
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
