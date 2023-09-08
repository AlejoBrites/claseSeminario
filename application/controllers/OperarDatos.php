<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperarDatos extends CI_Controller {
    
	        
        public function RecibirGrabar(){
            
            /*Recibe los datos de user y pass y tiene que validarlos*/
            
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['usuario']
            
            $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_SPECIAL_CHARS);
            
            echo("nombre ".$nombre."<br> apellido ".$apellido);

            $this->load->model('ModeloInsertar');
            $this->ModeloInsertar->insertarEnTabla($nombre,$apellido);

            
        }
}
         
