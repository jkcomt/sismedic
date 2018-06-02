<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PERMISOS DE PACIENTES
        Permission::create([
            'name'=>'Listado de Pacientes',
            'slug'=>'pacientes.index',
            'description'=>'Lista y navega todos los pacientes del sistema',
            'area'=>'pacientes'
        ]);

        Permission::create([
            'name'=>'Ver detalle de paciente',
            'slug'=>'pacientes.show',
            'description'=>'Ver en detalle cada paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Editar de paciente',
            'slug'=>'pacientes.edit',
            'description'=>'Edición de cada paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Eliminar paciente',
            'slug'=>'pacientes.destroy',
            'description'=>'Eliminar cada paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Registrar nuevo paciente',
            'slug'=>'pacientes.create',
            'description'=>'Registrar nuevo paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Reporte general de pacientes',
            'slug'=>'pacientes.listareporte',
            'description'=>'Reporte general de pacientes del sistema'
        ]);

        Permission::create([
            'name'=>'Reporte de cada paciente',
            'slug'=>'pacientes.reporte',
            'description'=>'Reporte cada paciente del sistema'
        ]);

        //PERMISOS DE CITAS DE UN PACIENTE SELECCIONADO
        Permission::create([
            'name'=>'Registrar nueva cita para un determinado paciente',
            'slug'=>'pacientes.citas.create',
            'description'=>'Registrar nueva cita para un determinado paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Reporte general de citas por cada paciente',
            'slug'=>'pacientes.citas_paciente',
            'description'=>'Reporte general de citas por cada paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Listado de citas por cada paciente',
            'slug'=>'pacientes.citas',
            'description'=>'Listado de citas por cada paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Edita la cita de un determinado paciente',
            'slug'=>'pacientes.citas.edit',
            'description'=>'Edita la cita de un determinado paciente del sistema'
        ]);

        Permission::create([
            'name'=>'Ver detalle de la cita de un determinado paciente',
            'slug'=>'pacientes.citas.detailsCita',
            'description'=>'Ver detalle de la cita de un determinado paciente del sistema'
        ]);

        //PERMISOS DE CITAS

        Permission::create([
            'name'=>'Listado general de citas',
            'slug'=>'citas.catalogo',
            'description'=>'Listado general de citas del sistema',
            'area'=>'citas'
        ]);

        Permission::create([
            'name'=>'Reporte de una cita determinada',
            'slug'=>'citas.examenescliente',
            'description'=>'Reporte de una cita determinada del sistema'
        ]);

        Permission::create([
            'name'=>'Reporte general de citas',
            'slug'=>'citas.listareporte',
            'description'=>'Reporte general de citas del sistema'
        ]);

        //
        Permission::create([
            'name'=>'Registrar una nueva cita',
            'slug'=>'citas.nuevacita',
            'description'=>'Registrar una cita determinada del sistema'
        ]);

        Permission::create([
            'name'=>'Eliminar la cita de un determinado paciente',
            'slug'=>'citas.destroy',
            'description'=>'Eliminar la cita de un determinado paciente del sistema'
        ]);

        //PERMISOS DE FUNCIONES VITALES
        Permission::create([
            'name'=>'Listar funciones vitales',
            'slug'=>'funcion_vital.index',
            'description'=>'Listar funciones vitales del sistema',
            'area'=>'funcion_vital'
        ]);

        Permission::create([
            'name'=>'Registrar función vital',
            'slug'=>'funcion_vital.create',
            'description'=>'Registrar función vital del sistema'
        ]);

        Permission::create([
            'name'=>'Editar función vital',
            'slug'=>'funcion_vital.edit',
            'description'=>'Editar función vital del sistema'
        ]);

        Permission::create([
            'name'=>'Eliminar función vital',
            'slug'=>'funcion_vital.destroy',
            'description'=>'Eliminar función vital del sistema'
        ]);

        Permission::create([
            'name'=>'Detalle de función vital',
            'slug'=>'funcion_vital.show',
            'description'=>'Detalle de función vital del sistema'
        ]);

        Permission::create([
            'name'=>'Reporte de funciones vitales',
            'slug'=>'funcion_vital.listareporte',
            'description'=>'Reporte de funciones vitales del sistema'
        ]);

        //EVALUACION MÉDICA
        Permission::create([
            'name'=>'Listado de Evaluación médica',
            'slug'=>'evaluacion_medica.index',
            'description'=>'Listado de Evaluación médica del sistema',
            'area'=>'evaluacion_medica'
        ]);

        Permission::create([
            'name'=>'Registro de Evaluación médica',
            'slug'=>'evaluacion_medica.create',
            'description'=>'Registro de Evaluación médica del sistema'
        ]);

        //CONFIGURACION
        Permission::create([
            'name'=>'Acceso a configuracion',
            'slug'=>'configuracion.index',
            'description'=>'Acceso a configuracion del sistema',
            'area'=>'configuracion'
        ]);

        Permission::create([
            'name'=>'Acceso a tipo de instrucción',
            'slug'=>'tipoinstruccion.index',
            'description'=>'Acceso a tipo de instrucción del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a profesiones',
            'slug'=>'profesion.index',
            'description'=>'Acceso a profesiones del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a contrata',
            'slug'=>'contrata.index',
            'description'=>'Acceso a contrata del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a áreas',
            'slug'=>'area.index',
            'description'=>'Acceso a áreas del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a ocupaciones',
            'slug'=>'ocupaciones.index',
            'description'=>'Acceso a ocupaciones del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a lugar de labores',
            'slug'=>'lugarlabor.index',
            'description'=>'Acceso a lugar de labores del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a altura',
            'slug'=>'altura.index',
            'description'=>'Acceso a altura del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a grupo sanguíneo',
            'slug'=>'gruposanguineo.index',
            'description'=>'Acceso a grupo sanguíneo del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a perfiles',
            'slug'=>'perfil.index',
            'description'=>'Acceso a perfiles del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a cientes cuenta',
            'slug'=>'cliente_cuenta.index',
            'description'=>'Acceso a cientes cuenta del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a tipo examenes',
            'slug'=>'tipo_examen.index',
            'description'=>'Acceso a tipo examenes del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a lista de examenes',
            'slug'=>'lista_examen.index',
            'description'=>'Acceso a lista de examenes del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a cargos de usuario',
            'slug'=>'cargo.index',
            'description'=>'Acceso a cargos de usuario del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a personal',
            'slug'=>'personal.index',
            'description'=>'Acceso a personal del sistema'
        ]);

        Permission::create([
            'name'=>'Acceso a usuarios',
            'slug'=>'usuario.index',
            'description'=>'Acceso a usuarios del sistema'
        ]);
//
    }
}
