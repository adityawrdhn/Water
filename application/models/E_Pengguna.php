<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Pengguna extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getPengguna()
	{
		$this->db->order_by('WAKTU_TES','ASC');
		$query = $this->db-> get('TB_PENGGUNA');
		return $query->result();	
	}

	public function insertDataPengguna(){
		$data = $this->input->post();
		$nama  = $this->input->post('nama');	
		$pekerjaan  = $this->input->post('pekerjaan');	
		$jenisKelamin  = $this->input->post('jenisKelamin');	
		$umur  = $this->input->post('umur');	

		$data = array (
			'nama'  => $nama,
			'pekerjaan'  => $pekerjaan,
			'Jenis_Kelamin'  => $jenisKelamin,
			'umur'  => $umur					
			);  
		$this->db->insert('TB_PENGGUNA',$data);
		$query = $this->db->select('ID_PENGGUNA,NAMA')
				->where(array('nama' => $nama,'pekerjaan'=> $pekerjaan,'jenis_kelamin'=> $jenisKelamin,'umur'=> $umur)) 
				->from('TB_PENGGUNA')                     
				->get();                         
		$user = $query->row();
		$data = array('pengguna' => $user->NAMA, 'id_pengguna' => $user->ID_PENGGUNA);
		$this->session->set_userdata($data);
	}
	public function getDataTipe($id)
	{
		$query = $this->db-> query("SELECT * FROM TB_TIPE WHERE ID_TIPE='$id'");
		return $query->result();	
	}

	public function allTipe()
	{
		$query=$this->db->query("select * from tb_macamtipe");
		return $query->result();
	}

	public function single($id)
	{
		$query = $this->db->query("select * from tb_macamtipe where id = '$id'");
		return $query->result();
	}

	public function updatePengguna($id, $data)
	{	
 
		$this->db->update('TB_PENGGUNA',$data, array('ID_PENGGUNA'=>$id));
	}


}

/* End of file E_Pengguna.php */
/* Location: ./application/models/E_Pengguna.php */