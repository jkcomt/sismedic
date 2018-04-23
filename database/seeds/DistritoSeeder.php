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
        $distritos = array(
            "1"=>array('Asuncion',
                        'Balsas',
                        'Chachapoyas',
                        'Cheto',
                        'Chiliquin',
                        'Chuquibamba',
                        'Granada',
                        'Huancas',
                        'La Jalca',
                        'Levanto',
                        'Leymebamba',
                        'Magdalena',
                        'Mariscal Castilla',
                        'Molinopampa',
                        'Montevideo',
                        'Olleros',
                        'Quinjalca',
                        'San Francisco de Daguas',
                        'San Isidro de Maino',
                        'Soloco',
                        'Sonche'),
            "2"=>array('Aramango',
                        'Bagua',
                        'Copallin',
                        'El Parco',
                        'Imaza',
                        'La Peca'),
            "3"=>array('Chisquilla',
                        'Churuja',
                        'Corosha',
                        'Cuispes',
                        'Florida',
                        'Jazan',
                        'Jumbilla',
                        'Recta',
                        'San Carlos',
                        'Shipasbamba',
                        'Valera',
                        'Yambrasbamba'),
            "4"=>array('El Cenepa',
                        'Nieva',
                        'Rio Santiago'),
            "5"=>array('Camporredondo',
                        'Cocabamba',
                        'Colcamar',
                        'Conila',
                        'Inguilpata',
                        'Lamud',
                        'Longuita',
                        'Lonya Chico',
                        'Luya',
                        'Luya Viejo',
                        'María',
                        'Ocalli',
                        'Ocumal',
                        'Pisuquia',
                        'Providencia',
                        'San Cristóbal',
                        'San Francisco del Yeso',
                        'San Jerónimo',
                        'San Juan de Lopecancha',
                        'Santa Catalina',
                        'Santo Tomás',
                        'Tingo',
                        'Trita'),
            "6"=>array('Chirimoto',
                        'Cochamal',
                        'Huambo',
                        'Limabamba',
                        'Longar',
                        'Mariscal Benavides',
                        'Milpuc',
                        'Omia',
                        'San Nicolás',
                        'Santa Rosa',
                        'Totora',
                        'Vista Alegre'),
            "7"=>array('Bagua Grande',
                        'Cajaruro',
                        'Cumba',
                        'El Milagro',
                        'Jamalca',
                        'Lonya Grande',
                        'Yamon')
        );
        //factory(Distrito::class,1)->create();

        foreach($distritos as $key => $value){
            foreach ($value as $nombre){
                factory(Distrito::class)->create([
                    'provincia_id'=>$key,
                    'nombre'=>$nombre
                ]);
            }
        }
    }
}
