<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HolaMundo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	//---------------------------------recargas------------------------------------------------
	public function Recargas()
	{
		$result['traer']=$this->Model->traer_registroRecargas();
		$this->load->view('Recargas_View', $result);
	}
	public function registroRecargas()
	{
		$id_operador = $this->input->post("id_operador");
		$numero = $this->input->post("numero");
		$valor = $this->input->post("valor");

		$conjunto = array(
			'id_operador' => $id_operador,
			'numero' => $numero,
			'valor' => $valor,
		);
		$this->Model->registrarRecargas($conjunto);
		redirect(base_url()."HolaMundo/Recargas" ,'refresh');
	}
	//------------------------------------ayuda---------------------------------------------------------------------
	public function Ayuda()
	{
		$this->load->view('Ayuda_View');
	}

	//-------------------------------------------------donacion---------------------------------------------------
	public function Donacion()
	{
		$result['traer']=$this->Model->traer_registroDonacion();
		$this->load->view('Donacion_View', $result);
	}
	public function registroDonacion()
	{
		$id_fundacion = $this->input->post("id_fundacion");
		$id_metodopago = $this->input->post("id_metodopago");
		$cantidad = $this->input->post("cantidad");

		$conjunto = array(
			'id_fundacion' => $id_fundacion,
			'id_metodopago' => $id_metodopago,
			'cantidad' => $cantidad,
		);
		$this->Model->registrarDonacion($conjunto);
		redirect(base_url()."HolaMundo/Donacion" ,'refresh');
	}
}
