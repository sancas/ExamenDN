<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class management extends CI_Controller {
 
function __construct()
{
       parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
 
}
 
public function clientes($output = null)
	{
		$crud = new grocery_CRUD();

			
			$crud->set_table('cliente');
			
			$output = $crud->render();

			
		$this->load->view('clientes.php',(array)$output);
	}

public function vehiculos($output = null)
	{
		$crud = new grocery_CRUD();

			
			$crud->set_table('vehiculo');
			
			$output = $crud->render();

			
		$this->load->view('clientes.php',(array)$output);
	}


}
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */