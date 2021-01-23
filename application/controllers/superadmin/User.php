<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'active_controller' => 'user',
			'active_function'	=> 'index' 
		];
		$this->load->view('adminlte3/global/template', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */