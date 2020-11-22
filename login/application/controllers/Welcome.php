<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$data = [
			'title' => 'Dashboard',
			'userstot' => $this->db->query("SELECT COUNT(id_user) as isi FROM user")->row()->isi

		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/side');
		$this->load->view('layout/dump_con', $data);
		$this->load->view('layout/footer');
	}
}
