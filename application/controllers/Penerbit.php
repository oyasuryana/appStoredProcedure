<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {
	
	public function __construct(){
	parent::__construct();
	$this->load->model('M_penerbit','',TRUE);	
	}

	public function index()
	{
		$data['title']='Contoh Penerapan MySQL Stored Procedure di Codeigniter';
		$data['header']='<h1>MySQL Stored Procedure di CodeIgniter</h1>';
		$data['konten']='<p>Berikut adalah contoh penerapan stored procedure MySQL di COdeIgniter. Artikel ini merupakan artikel lanjutan <b><a href="http://ozs.web.id/2016/12/membuat-stored-procedure-di-mysql/" target="_blank">Membuat Stored Procedure di MySQL</a></b>, jadi untuk mamahami artikel ini silahkan dibaca terlebih dahulu artikel saya tentang di <b><a href="http://ozs.web.id">official blog saya</a></b>.</p>
		';
		$this->load->view('v_dashboard',$data);
	}
	
	
	public function tampil(){
		$data['title']='Contoh Penerapan MySQL Stored Procedure di Codeigniter';
		$data['header']='<h1>Data Penerbit</h1>';
		$data['konten']='<p>Berikut data penerbit yang terdaftar dalam database, klik icon pada sebelah kanan tabel untuk mengelola data penerbit, dan kilk tombol tambah untuk menambah data penerbit!</p>';
		$data['page']='v_data_penerbit';
		$data['list_penerbit']=$this->M_penerbit->tampil();
		$this->load->view('v_dashboard',$data);	
	}

	public function form($id_penerbit=null){
		$id_penerbit==null ? $aksinya='Penambahan' : $aksinya='Perubahan';	

		$aksinya=='Perubahan' ? $data['detail_penerbit']=$this->M_penerbit->detail($id_penerbit) : $data['detail_penerbit']=null;
		
		$this->form_validation->set_error_delimiters('<font color="red"><em><small>', '</small></em></font>');
		$this->form_validation->set_message('required','Tidak Boleh Kosong');
		$this->form_validation->set_rules('kode_penerbit','Kode Penerbit','required');
		$this->form_validation->set_rules('nama_penerbit','Nama Penerbit','required');
		$this->form_validation->set_rules('phone_fax_penerbit','Telepon/Fax Penerbit','required');
	
			if ($this->form_validation->run() == TRUE)
                {
					if($id_penerbit==null){	
                        echo '<script>alert(\'Data Telah Disimpan\')</script>';
						//simpan
						$this->M_penerbit->simpan($this->input->post('kode_penerbit'),
						$this->input->post('nama_penerbit'),
						$this->input->post('kota_penerbit'),
						$this->input->post('email_penerbit'),
						$this->input->post('web_penerbit'),
						$this->input->post('phone_fax_penerbit')
						);
						
					} else {
						echo '<script>alert(\'Data Telah Update\')</script>';
						//update
						$this->M_penerbit->ubah($this->input->post('kode_penerbit'),
						$this->input->post('nama_penerbit'),
						$this->input->post('kota_penerbit'),
						$this->input->post('email_penerbit'),
						$this->input->post('web_penerbit'),
						$this->input->post('phone_fax_penerbit')
						);
					}
				redirect(base_url().'index.php/penerbit/tampil','refresh');					
                }
		
		$data['title']='Contoh Penerapan MySQL Stored Procedure di Codeigniter';
		$data['header']='<h1>'.$aksinya.' Data Penerbit</h1>';
		$data['konten']='<p>Untuk melakukan '.strtolower($aksinya).' data penerbit, silahkan isi semua field pada form dibawah ini !</p>';
		$data['page']='v_form_penerbit';
		$data['list_penerbit']=$this->M_penerbit->tampil();

		$this->load->view('v_dashboard',$data);			
	}

	public function hapus($id_penerbit){
		$this->M_penerbit->hapus($id_penerbit);
		redirect(base_url().'index.php/penerbit/tampil','refresh');
	}
	
	
}
