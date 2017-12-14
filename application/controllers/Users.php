<?php
class Users extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('short_number'); //calling helper short number format
		$this->load->model('user_model'); //calling model user_model
	}
	function index(){
		$data['data']=$this->user_model->get_users();
		$this->load->view('user_view',$data);
	}
}