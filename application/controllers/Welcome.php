 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function hola(){ //INSERTA LOS DATOS
		$this->Site_model->insertarProfesor();
}

public function qdatos(){//obtener
	$resultado=$this->Site_model->getProfesores();
	print_r($resultado);
}

public function updata(){//actualizar los datps
  $this->Site_model->updateProfesor();
  echo "datos actualizados";
}
}
