<?php

class PaisesController extends BaseController {

    //Accion de ejemplo

    public function getPaises() {
        $paises = array(
             'Ecuador'=>[
                 "Capital"=>"Quito",
                 "DondeIr"=>"Isla isabel",
                 "Moneda"=>"Dolar",
                 "Poblacio"=>15.74
             ],
            'Peru'=>[
                 "Capital"=>"Lima",
                 "DondeIr"=>"Chimbote",
                 "Moneda"=>"Sol",
                 "Poblacio"=>30.38
             ],
            'Bolivia'=>[
                 "Capital"=>"Sucre",
                 "DondeIr"=>"Oruro",
                 "Moneda"=>"Boliviano",
                 "Poblacio"=>10.6
             ],
            'Chile'=>[
                 "Capital"=>"Santiago de chile",
                 "DondeIr"=>"ValParaiso",
                 "Moneda"=>"peso",
                 "Poblacio"=>17.62
             ],
            'Argentina'=>[
                 "Capital"=>"Buenos aires",
                 "DondeIr"=>"Mar de plata",
                 "Moneda"=>"peso",
                 "Poblacio"=>"n.n"
             ],
            'Uruguay'=>[
                 "Capital"=>"Monte video",
                 "DondeIr"=>"Punta del este",
                 "Moneda"=>"peso Uruguay",
                 "Poblacio"=>3.4
             ],
            'Brasil'=>[
                 "Capital"=>"Brasilia",
                 "DondeIr"=>"Rio de janeiro",
                 "Moneda"=>"real",
                 "Poblacio"=>204
             ]
        );

        return View::make('Ejemplos/paises', ["paises" => $paises]);

        }

    public function getCiudad (){
        $result= DB::select("
            select
                P.country as pais,
                C.city as nombre

            from
	        country P inner join city C on P.country_id = C.country_id
            ORDER BY P.country  ASC;");

        return View::make('Ejemplos/ciudades',["paises" => $result]);
    }
}
