<?php
include("../config/conexion.php");


class Factura{


    function insertarFactura($numeroFactura,$fechaCompra,$tipoCombustible,$montoCompra,$txtKm){
      $con = conectar();
      $sql = "INSERT INTO Factura(numeroFactura,fechadeCompra,tipoCombustible,montoCompra,km) VALUES
              ('$numeroFactura','$fechaCompra','$tipoCombustible','$montoCompra','$txtKm')";

        $res = $con->query($sql);
          return $res;
    }

    function findAll(){
      $con = conectar();
      $sql = "select tipoCombustible as 'tipo', avg(montoCompra) as 'montoPromedio', avg(km) as 'kmPromedio', fechadeCompra from Factura group by tipo";
      $res = $con->query($sql);
      return $res;
    }

    function findByTipoCombustible($fecha1, $fecha2){
      $con = conectar();
      $sql = "Select tipoCombustible as 'tipo', avg(montoCompra) as 'montoPromedio', avg(km) as 'kmPromedio', fechadeCompra from Factura where fechadeCompra between '$fecha1' and '$fecha2' group by tipo";
      $res = $con->query($sql);
      return $res;
    }

    function findFacturas($fecha1, $fecha2,$tipo){
      $con = conectar();
      $sql = "select * from Factura where (('$fecha1' is null  and '$fecha2' is null) or (fechadeCompra between '$fecha1' and '$fecha2') ) and tipoCombustible = '$tipo'";
      $res = $con->query($sql);
      return $res;
    }


}




 ?>
