<?php 
	/**
	* 
	*/
	class Blog extends CI_Controller
	{
		
		function index()
		{	
			$this->load->model('blog_model');
			$data['records']=$this->blog_model->getAll();
			$this->load->view('home', $data);
		}

		function  about(){
			$this->load->view('about');
		}
	}



?>