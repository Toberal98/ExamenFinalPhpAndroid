<?php
include_once("../model/modeloFactura.php");

  class EndPointFactura {

    function addFactura($numeroFactura,$fechaCompra,$tipoCombustible,$montoCompra,$txtKm){
        $Factura = new Factura();

        if($Factura->insertarFactura($numeroFactura,$fechaCompra,$tipoCombustible,$montoCompra,$txtKm)){
        http_response_code(201);
        }else{
        http_response_code(400);
        }
    }

    function findAllFacts(){
        $Factura = new Factura();
        $facturas['items'] = array();
        $res=$Factura->findAll();
        if(mysqli_num_rows($res)>0){
          while($fila=mysqli_fetch_assoc($res)){
            $item=array(
              "idFactura"=>$fila["idFactura"],
              "numeroFactura"=>$fila["numeroFactura"],
              "fechadeCompra"=>$fila["fechadeCompra"],
              "tipoCombustible"=>$fila["tipoCombustible"],
              "montoCompra"=>$fila["montoCompra"],
              "km"=>$fila["km"],
            );
            array_push($facturas["items"],$item);
          }
          echo json_encode($facturas);
        }
        else{
          echo json_encode(array("mensaje"=>"No hay resultados"));
        }
    }

    function findByTipoCombustible($fecha1, $fecha2){
        $Factura = new Factura();
        $filtradas['items']= array();
          $res = $Factura->findByTipoCombustible($fecha1, $fecha2);

          if(mysqli_num_rows($res)>0){
            while($fila=mysqli_fetch_assoc($res)){

              $item=array(
                "tipo"=>$fila["tipo"],
                "montoPromedio"=>$fila["montoPromedio"],
                "kmPromedio"=>$fila["kmPromedio"],
                "fechadeCompra"=>$fila["fechadeCompra"],
              );
              array_push($filtradas["items"],$item);
            }
            echo json_encode($filtradas);
          }
          else{
            echo json_encode(array("mensaje"=>"No hay resultados"));
          }
    }

    function findFacturas($fecha1, $fecha2,$tipo){
        $Factura = new Factura();
        $filtradas['items']= array();
          $res = $Factura->findFacturas($fecha1, $fecha2,$tipo);
          if(mysqli_num_rows($res)>0){
            while($fila=mysqli_fetch_assoc($res)){
              $item=array(
                "idFactura"=>$fila["idFactura"],
                "numeroFactura"=>$fila["numeroFactura"],
                "fechadeCompra"=>$fila["fechadeCompra"],
                "tipoCombustible"=>$fila["tipoCombustible"],
                "montoCompra"=>$fila["montoCompra"],
                "km"=>$fila["km"],
              );
              array_push($filtradas["items"],$item);
            }
            echo json_encode($filtradas);
          }
          else{
            echo json_encode(array("mensaje"=>"No hay resultados"));
          }
    }
  }

?>
