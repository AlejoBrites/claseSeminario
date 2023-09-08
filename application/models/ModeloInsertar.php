<?php

class ModeloInsertar extends CI_Model{

    public function __construct() { 
    parent::__construct();
    }

    //Guardamos los datos del cliente en un array y luego lo insertamos en la base de datos
    public function insertarEnTabla($nombre, $apellido){
        $datos = array(
            'nombre'=> $nombre,
            'apellido'=> $apellido
        );
        $this->db->insert('cliente', $datos);
    }




}