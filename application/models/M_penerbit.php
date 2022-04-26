<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penerbit extends CI_Model {


	public function tampil(){
		// menjalankan stored procedure tampil_penerbit()
		$sql_query=$this->db->query("call tampil_penerbit()");  	  				
	    mysqli_next_result( $this->db->conn_id);
            if($sql_query->num_rows()>0){
                return $sql_query->result_array();
            }
	}
		
	public function detail($kode_penerbit_nya){
		// menjalankan stored procedure detail_penerbit()
		$sql_query=$this->db->query("call detail_penerbit('".$kode_penerbit_nya."')");  	  				
	    mysqli_next_result( $this->db->conn_id);
            if($sql_query->num_rows()==1){
                return $sql_query->row_array();
            }
	}
	
	public function hapus($kode_penerbit_nya){
		$sql_query=$this->db->query("call hapus_penerbit('".$kode_penerbit_nya."')");  	  				
	}

	public function simpan($kode,$nama,$kota,$email,$web,$telp){
		$sql_query=$this->db->query("call tambah_penerbit('".$kode."','".$nama."','".$kota."','".$email."','".$web."','".$telp."')");  	  				
	}

	public function ubah($kode,$nama,$kota,$email,$web,$telp){
		$sql_query=$this->db->query("call ubah_penerbit('".$kode."','".$nama."','".$kota."','".$email."','".$web."','".$telp."')");  	  				
	}

}

