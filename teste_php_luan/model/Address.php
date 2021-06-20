<?php


class Address
{
    private $cep;
    private $rua;
    private $bairro;
    private $estado;



    /*public function Address($cep, $rua, $bairro, $estado)
    {
        $this->cep = $cep;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->estado = $estado;
    }*/


    public function getRua()
    {
        return $this->rua;
    }
    public function setRua($rua)
    {
        $this->rua = $rua;
    }
    public function getBairro()
    {
        return $this->bairro;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }


    public function get_address($cep){
        //var_dump($cep);
        $this->$cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/".$cep."/xml/";


        //simplexml_load_file — Interpreta um arquivo XML e o transforma em um objeto
        $xml = simplexml_load_file($url);
        return $xml;
    }

}