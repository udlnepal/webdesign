<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('admin_model');
		 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } 
	}



public function display($view,$data){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view($view,$data);
		$this->load->view('templates/footer',$data);

}



	public function index()
	{
		$data['titlename']=$this->admin_model->get_logged_user();
		$this->display('test',$data);
	}


	public function bookings()
	{
		$data['titlename']=$this->admin_model->get_logged_user();
		$data['package_book']=$this->admin_model->get_bookings();
		$this->display('bookings',$data);
	}
	


}
