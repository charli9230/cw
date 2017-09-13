<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('home');
		$this->load->view('common/footer');
	}
	public function worship()
	{
		$this->load->view('common/header_worship');
		$this->load->view('worship');
		$this->load->view('common/footer_worship');
	}
	public function prayer()
	{
		$this->load->view('common/header_worship');
		$this->load->view('prayer');
		$this->load->view('common/footer_worship');
	}
	public function hospitality()
	{
		$this->load->view('common/header_worship');
		$this->load->view('hospitality');
		$this->load->view('common/footer_worship');
	}
	public function dance()
	{
		$this->load->view('common/header_worship');
		$this->load->view('dance');
		$this->load->view('common/footer_worship');
	}
	public function men()
	{
		$this->load->view('common/header_worship');
		$this->load->view('men_ministry');
		$this->load->view('common/footer_worship');
	}
	public function multimedia()
	{
		$this->load->view('common/header_worship');
		$this->load->view('multimedia');
		$this->load->view('common/footer_worship');
	}
	public function salt()
	{
		$this->load->view('common/header_worship');
		$this->load->view('salt');
		$this->load->view('common/footer_worship');
	}
	public function women()
	{
		$this->load->view('common/header_worship');
		$this->load->view('women_ministry');
		$this->load->view('common/footer_worship');
	}
	public function youth()
	{
		$this->load->view('common/header_worship');
		$this->load->view('youth_ministry');
		$this->load->view('common/footer_worship');
	}
	
}

