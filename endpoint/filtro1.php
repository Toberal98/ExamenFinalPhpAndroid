<?php
  include_once("../controller/controladorFactura.php");
    $EndPointFactura = new EndPointFactura();

    $txtfecha1 = (isset($_REQUEST['$txtfecha1'])?$_REQUEST['$txtfecha1']:"");
    $txtfecha2 = (isset($_REQUEST['$txtfecha2'])?$_REQUEST['$txtfecha2']:"");
    if($_REQUEST){
        $EndPointFactura->findByTipoCombustible($txtfecha1, $txtfecha2);
      }
?>
