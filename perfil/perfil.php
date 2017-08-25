<?php

class Perfil
{
    private $id;
    private $nombre;
    private $tipo;
    private $fecha_nacimiento;
    
     function __construct($idid, $nombre) {
       $this->id= $id;
       $this->nombre = $nombre;
     }
    
     function setId($id){
       $this->id= $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
