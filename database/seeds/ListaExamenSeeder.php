<?php

use Illuminate\Database\Seeder;
use App\ListaExamen;
class ListaExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(ListaExamen::class,1)->create();

        factory(ListaExamen::class)->create([
            'descripcion'=>'ANEXO 7D',
            'valor'=>2.63,
            'dscto'=>2.63,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'ELECTROCARDIOGRAMA',
            'valor'=>2.63,
            'dscto'=>2.63,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'ESPIROMETRÍA',
            'valor'=>2.63,
            'dscto'=>2.63,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'HEMOGRAMA - SOLO NUMERACION Y FORMULAR',
            'valor'=>2.63,
            'dscto'=>2.63,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'VELOCIDAD DE SEDIMENTACION',
            'valor'=>1.05,
            'dscto'=>1.05,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'TORAX',
            'tipo'=>'CM',
            'valor'=>1.05,
            'dscto'=>1.05
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'GLUCOSA',
            'valor'=>1.9,
            'dscto'=>1.9,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'CREATININA',
            'valor'=>2,
            'dscto'=>2,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'ACIDO URICO',
            'valor'=>1.65,
            'dscto'=>1.65,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'COLESTERLO - TOTAL',
            'valor'=>1.9,
            'dscto'=>1.9,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'TRIGLICERIDOS',
            'valor'=>4.7,
            'dscto'=>4.7,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'COLESTEROL - HDL',
            'valor'=>3.21,
            'dscto'=>3.21,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'COLESTEROL LDL',
            'valor'=>3.21,
            'dscto'=>3.21,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'GAMMA-GLUTAMIL TRANSPEPTIDASA',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'VISION',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'ORINA',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'SIFILIS',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);

        factory(ListaExamen::class)->create([
            'descripcion'=>'SUFICIENCIA DE TRABAJO EN ALTURA',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'APNEA DEL SUEÑO',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'USO DE RESPIRADORES',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'CUESTIONARIO NORDICO',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'CONDUCCION VEHICULO',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);
        /* factory(ListaExamen::class)->create([
             'descripcion'=>'CONDUCTOR OPERADOR',
             'valor'=>1,
             'dscto'=>1,
             'tipo'=>null
         ]);*/
        factory(ListaExamen::class)->create([
            'descripcion'=>'EVALUACION COGNITIVA',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);

        // factory(ListaExamen::class)->create([
        //     'descripcion'=>'HEMOGRAMA',
        //     'valor'=>1,
        //     'dscto'=>1,
        //     'tipo'=>null,
        //     'individual'=>true
        // ]);

        // factory(ListaExamen::class)->create([
        //     'descripcion'=>'BIOQUIMICA',
        //     'valor'=>1,
        //     'dscto'=>1,
        //     'tipo'=>null,
        //     'individual'=>true
        // ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'psa',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null,
            'individual'=>true
        ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'thevenon',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null,
            'individual'=>true
        ]);
        factory(ListaExamen::class)->create([
            'descripcion'=>'PERFIL HEPATICO',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null,
            'individual'=>true
        ]);
        /******/
        factory(ListaExamen::class)->create([
            'descripcion'=>'AUDIOMETRIA',
            'valor'=>1,
            'dscto'=>1,
            'tipo'=>null
        ]);

    }
}
