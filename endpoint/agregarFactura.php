<?php
  include_once("../controller/controladorFactura.php");


    $EndPointFactura = new EndPointFactura();

    $txtnumeroFactura = (isset($_REQUEST['$txtnumeroFactura'])?$_REQUEST['$txtnumeroFactura']:"");
    $txtfechadeCompra = (isset($_REQUEST['$txtfechadeCompra'])?$_REQUEST['$txtfechadeCompra']:"");
    $txttipoCombustible = (isset($_REQUEST['$txttipoCombustible'])?$_REQUEST['$txttipoCombustible']:"");
    $txtmontoCompra = (isset($_REQUEST['$txtmontoCompra'])?$_REQUEST['$txtmontoCompra']:"");
    $txtKm = (isset($_REQUEST['$txtKm'])?$_REQUEST['$txtKm']:"");

    if($_REQUEST){
    $EndPointFactura->addFactura($txtnumeroFactura,$txtfechadeCompra,$txttipoCombustible,$txtmontoCompra,$txtKm);

}
?>
