<?php
require_once '../model/Address.php';

class AddressController {
    private $cep;



    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function addAddress($cep){
        $this->setCep($cep);
        //var_dump($this->getCep());
    }


    public function showAddress(){
        $address = new Address();
        //var_dump($this->getCep());
        //Chamada do método que busca as informações a partir do CEP
        $address= $address->get_address($this->getCep());
        //var_dump($address);
        $_REQUEST['addresses']= $address;
        //Repassando os dados para a view de exibição
        require_once '../view/address_view.php';
    }

   }


$classeAddressController = new AddressController(); // Instancia da classe Controller
// Quando existir o post cep:
if(isset($_POST['cep'])){

    $cep=$_POST['cep'];
    //Adicionando ao atributo da classe
    $classeAddressController->addAddress($cep);
    //função que executa o método de busca de cep do Objeto
    $classeAddressController->showAddress();
}
?>

