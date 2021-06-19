<?php
require_once 'model/Address.php';

class AddressController {
    private $cep;


    public function AddressController()
    {
    }


    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function addAddress($cep){
        $this->$cep = $_POST['cep'];
    }


    public function showAddress(){

        $address = new Address();
        $address= $address->get_address($this->getCep());

        $_REQUEST['addresses']= $address;
        require_once 'view/address_view.php';
    }

   }


$classeAddressController = new AddressController(); // instancia sua classe
 var_dump("Aqui");
if(isset($_POST['cep'])){ // Quando existir o post cep:
    $classeAddressController->addAddress($_POST['cep']);
    $classeAddressController->showAddress();
}
?>

