<?php

use Illuminate\Database\Seeder;
use App\Provincia;
class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = array(
            "1"=>array('Chachapoyas','Bagua','Bongara','Condorcanqui','Luya','Rodriguez de Mendoza','Utcubamba'),
            "2"=>array('Aija','Antonio Raymondi','Asuncion','Bolognesi','Carhuaz','Carlos F.Fitzcarrald','Casma','Corongo','Huaraz','Huari','Huarmey','Huaylas','Mariscal Luzuriaga','Ocros','Pallasca','Pomabamba','Recuay','Santa','Sihuas','Yungay'),
            "3"=>array('Abancay','Andahuaylas','Antabamba','Aymaraes','Chincheros','Cotabambas','Grau'),
            "4"=>array('Arequipa','Camana','Caraveli','Castilla','Caylloma','Condesuyos','Islay','La Union'),
            "5"=>array('Cangallo','Huanta','Huancasancos','Huamanga','La Mar','Lucanas','Parinacochas','Paucar del Sara Sara','Sucre','Victor Fajardo','Vilcas Huaman'),
            "6"=>array('Cajabamba','Cajamarca','Celendin','Chota','Contumaza','Cutervo','Hualgayoc','Jaen','San Ignacio','San Marcos','San Miguel','San Pablo','Santa Cruz'),
            "7"=>array('Callao'),
            "8"=>array('Acomayo','Anta','Calca','Canas','Canchis','La Convencion','Cusco','Chumbivilcas','Espinar','Paruro','Paucartambo','Quispicanchis','Urubamba'),
            "9"=>array('Acobamba','Angaraes','Castrovirreyna','Churcampa','Huancavelica','Huaytara','Tayacaja'),
            "10"=>array('Huanuco','Ambo','Dos de Mayo','Huacaybamba','Huamalies','Leoncio Prado','Marañon','Pachitea','Puerto Inca','Lauricocha','Yarowilca'),
            "11"=>array('Chincha','Ica','Nazca','Palpa','Pisco'),
            "12"=>array('Chanchamayo','Chupaca','Concepcion','Huancayo','Jauja','Junin','Satipo','Tarma','Yauli'),
            "13"=>array('Ascope','Bolivar','Chepen','Gran Chimu','Julcan','Otuzco','Pacasmayo','Pataz','Sanchez Carrión','Santiago De Chuco','Trujillo','Viru'),
            "14"=>array('Chiclayo','Ferreñafe','Lambayeque'),
            "15"=>array('Barranca','Cajatambo','Canta','Cañete','Huaral','Huarochiri','Huaura','Lima','Oyon','Yauyos'),
            "16"=>array('Alto Amazonas','Datem del Marañon','Loreto','Mcal. Ramon Castilla','Maynas','Requena','Ucayali'),
            "17"=>array('Manu','Tahuamanu','Tambopata'),
            "18"=>array('General Sanchez Cerro','Ilo','Mariscal Nieto'),
            "19"=>array('Daniel A. Carrion','Oxapampa','Pasco'),
            "20"=>array('Ayabanca','Huancabamba','Morropon','Paita','Piura','Sechura','Sullana','Talara'),
            "21"=>array('Azangaro','Carabaya','Chucuito','El Collao','Huancane','Lampa','Melgar','Moho','Puno','San Antonio De Putino','San Roman','Sandia','Yunguyo'),
            "22"=>array('Bellavista','El Dorado','Huallaga','Lamas','Mariscal Caceres','Moyobamba','Picota','Rioja','San Martin','Tocache'),
            "23"=>array('Candarave','Jorge Basadre','Tacna','Tarata'),
            "24"=>array('Contralmierante Villar','Tumbes','Zarumilla'),
            "25"=>array('Atalaya','Coronel Portillo','Padre Abad','Purus')

        );

        foreach($provincias as $key => $value){
            foreach ($value as $nombre){
                factory(Provincia::class)->create([
                    'departamento_id'=>$key,
                    'nombre'=>$nombre
                ]);
            }
        }
    }
}
