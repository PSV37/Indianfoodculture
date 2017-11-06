<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{

     $this->load->view('home');

	}



	public function Home_search()
	{

     $this->load->view('Home_search');


}

}   






