<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'annisanadia.teleanjar@gmail.com';
		$config['smtp_pass'] = 'txdrumbuqrohqdmh';
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('annisanadia.teleanjar@gmail.com', 'Annisa Nadia Nur`aqilah');
		$this->email->to('heggies0iqbal@gmail.com');

		$this->email->subject('Email Test');
		$body = $this->load->view('sendemail', null, TRUE);
		$this->email->message($body);

		if ($this->email->send()) {
			echo "bisa";
		} else {
			echo $this->email->print_debugger();
		}

		return;
		// $this->load->view('welcome_message');
	}
}
