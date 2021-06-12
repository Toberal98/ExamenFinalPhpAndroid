<?php
  include_once("../controller/controladorFactura.php");

    $EndPointFactura = new EndPointFactura();
    $EndPointFactura->findAllFacts();

?>
