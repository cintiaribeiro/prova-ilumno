<?php

namespace App\controller;

class CurlController{

    /***
    Exibi a view com o formulário de cotação
     */
    public function index()
    {
        include_once($_SERVER['DOCUMENT_ROOT']."/public/index.php");
    }

    /**
     * Envia os dados necessarios para api 
     * */    
    public function sendForm()
    {
        $dados = $this->dados($_REQUEST);
           
        $url = "http://hechoparaliderar.com/SIAF/api/php/proxys/regsproxy.php"; 
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
        $result = curl_exec($ch);        
        curl_close($ch);
        if($result)
            $msg ="Dados enviados com sucesso!";

        include_once($_SERVER['DOCUMENT_ROOT']."/public/index.php");
    }

    /**
     * Recebe dos dados vindo do formulario de cotação
     * Inclui os dados ao array que contém os demais dados padões
     * @param Request $dados
     * @return Json
     */
    private function dados($dados)
    {
        $aDados= [
            "service"=> "1",
            "forms_id_form" => "988",
            "forms_admins_id_admin" => "36",
            "content_reg" => 
            [
                "id_form" => "988",
                "admins_id_admin" => "36",
                "title_form" => "prueba (988)",
                "description_form" => "prueba",
                "fields_form" => 
                    [
                        "type" => "TEXT",
                        "fieldId" => "fi eldType1_combo",
                        "name" => "nombre",
                        "value" => $dados['nombre'],
                        "restrict" => " NameCharactersAndNumbers"
                    ],
                    [
                        "type" => "TEXT",
                        "fieldId" =>"fieldType2_combo",
                        "name"=>"email",
                        "value" => $dados['email'],
                        "restrict" => "NameCharactersAndN umbers"
                    ],
                    [
                        "type" => "TEXT",
                        "fieldId" => "fieldType3_combo",
                        "name" => "tipodoc",
                        "val ue" => $dados['tipodoc'],
                        "restrict" => "NameCharactersAndNumbers"
                    ],
                [
                    "type" => "TEXT",
                    "fieldId" => "fieldType4_combo",
                    "name" => "numdoc",
                    "value" => $dados['numdoc'],
                    "restrict" =>"NameCharactersAndNumbers"
                ],
                "date_form"=>"2019-04-29 00:00:00",
            ]
        ];

        return json_encode($aDados);
    }

}
