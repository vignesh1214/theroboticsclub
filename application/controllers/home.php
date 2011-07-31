<?php 

class Home extends CI_Controller{
	

function __construct()

{
	parent::__construct();
	$this->load->helper('url');
	$this->load->helper('html');
}



public function index()
{
	$this->load->view('test');
}

public function news()

{
	$this->load->view('news');
}

public function exhibitions()

{
	$this->load->view('exhibitions');
}

public function groundzero()

{
	$this->load->view('groundzero');
}

public function handson()

{
	$this->load->view('handson');
}

public function  myinnovation()

{
	$this->load->view('myinnovation');
}

public function quizmania()

{
	$this->load->view('quizmania');
}

public function aboutus()

{
	$this->load->view('aboutus');
}

public function contactus()

{
	$this->load->view('contactus');
}

public function faq()

{
	$this->load->view('faq');
}

}