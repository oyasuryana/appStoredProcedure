<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function __construct(){
	parent::__construct();
	$this->load->model('M_penerbit','',TRUE);	
	}

	public function index()
	{
		$data['title']='Contoh Penerapan MySQL Stored Procedure di Codeigniter | About';
		$data['header']='<h1>About</h1>';
		$data['konten']='<p>Artikel ini dibuat dengan tujuan pembelajaran, silahkan untuk di-share atau dikembangkan dengan tidak menghilangkan halaman ini !</p>
		
		
		<p><b><span class="glyphicon glyphicon-user"></span>  Author </b> <br/>Oya Suryana, M.Kom.</p>

		<p><b><span class="glyphicon glyphicon-globe"></span> Official Blog </b><br/><a href="http://ozs.web.id" target="_blank">http://ozs.web.id</a></p>	

		<p><b><span class="glyphicon glyphicon-envelope"></span> Email </b><br/>oyasuryana[at]yahoo[dot]com</p>	
		
		';
		$this->load->view('v_dashboard',$data);
	}
	
	
	
}
