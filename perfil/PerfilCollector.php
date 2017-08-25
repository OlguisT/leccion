<?php

include_once('perfil.php');
include_once('Collector.php');

class ProvinciaCollector extends Collector
{
  
  function showProvincias() {
    $rows = self::$db->getRows("SELECT * FROM perfil");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new perfil($c{'id'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showPerfil($id) {
    $rows = self::$db->getRows("SELECT * FROM perfil where id= ? ", array ("{$id}"));        
$ObjDemo= new Demo($rows[0]{'id'},$rows[0]{'nombre'});
    
    return $ObjDemo;        
  }
function UpdatePerfil($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.perfil SET nombre = ? where id= ? ", array ("{$nombre}",$id));

}
function deletePerfil($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.perfil where id= ? ", array ("{$id}"));

}


}
?>

