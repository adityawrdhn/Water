<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_Hitung extends CI_Model{

	public function getalltb_training(){
		$this->db->select('*');
		$this->db->from('tb_training');

		$query = $this->db->get();
		return $query->result();
	}

	public function masukcluster($data){
		$this->db->insert('cluster',$data);
	}

	public function getData($indeks){
		$this->db->select('*');
		$this->db->from('tb_training');
		$this->db->where('tb_training.NO',$indeks);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCluster(){
		$this->db->select('*');
		$this->db->from('cluster');

		$query = $this->db->get();
		return $query->result();
	}

	public function getDataCluster($indeks){
		$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('tb_training','tb_training.no = cluster.pusat');
		$this->db->where('tb_training.NO',$indeks);	

		$query = $this->db->get();
		return $query -> result();
	}

	public function getTemp(){
		$this->db->select('*');
		$this->db->from('temp');

		$query = $this->db->get();
		return $query -> result();
	}

	public function getAllDataCluster(){
		$this->db->select('*');
		$this->db->from('cluster');
		$this->db->join('tb_training','tb_training.no = cluster.pusat');

		$query = $this->db->get();
		return $query -> result();
	}

	public function insertToJarak($data){

		$this->db->insert('jarak',$data);
	}

	public function selectFromJarak($data){
		$this->db->select('*');
		$this->db->from('jarak');
		$this->db->where('jarak.data',$data);
		$this->db->order_by('jarak');

		$query = $this->db->get();
		return $query -> result();
	}

	public function selectAllFromJarak(){
		$this->db->select('*');
		$this->db->from('jarak');

		$query = $this->db->get();
		return $query -> result();
	}

	public function insertToTemp($data){
		$this->db->insert('temp',$data);
	}

	public function selectFromTempDanDataTraining($cluster){
		$this->db->select('tb_training.no,sum(PH) as PH ,SUM(TDS) as TDS,SUM(EC) as EC,SUM(T) as T');
		$this->db->from('tb_training');
		$this->db->where('tb_training.No',$cluster);

		$query = $this->db->get();
		return $query -> result();
	}
	public function countRowFromTempDanDataTraining($cluster){
		$this->db->select('*');
		$this->db->from('tb_training');
		$this->db->where('tb_training.No',$cluster);

		$query = $this->db->get();
		return $query -> num_rows();
	}

	public function insertToKluster($data){
		$this->db->insert('kluster',$data);
	}

	public function selectJarakTerkecilPerKluster($cluster){
		$this->db->select('jarak.Data, jarak.Cluster ,SUM(jarak.Jarak) as Jarak');
		$this->db->from('temp');
		$this->db->join('jarak','temp.data = jarak.data AND temp.cluster = jarak.Cluster');
		$this->db->where('jarak.cluster',$cluster);

		$query = $this->db->get();
		return $query -> result();
	}

	public function kosongTabelJarak(){
		$this->db->empty_table('jarak');
	}
	public function kosongTabelKluster(){
		
		$this->db->empty_table('kluster');
		
	}
	public function kosongTabelTemp(){
		$this->db->empty_table('temp');
	}

	public function selectAllFromKluster(){
		$this->db->select('*');
		$this->db->from('tb_training');
		$query = $this->db->get();
		return $query -> result();
	}

	public function JoinTempDantb_training($cluster){
		$this->db->select('*');
		$this->db->from('temp');
		$this->db->join('tb_training','temp.data = tb_training.NO');
		$this->db->where('temp.cluster',$cluster);

		$query = $this->db->get();
		return $query -> result();
	}
	public function updateKluster($class,$kluster){
		$data = array(
               'KELAS' => $class
            );
		$this->db->where('NamaCluster', $kluster);
		$this->db->update('kluster', $data); 
	}

	public function insertToKlasifikasi($data){
		$this->db->insert('klasifikasi',$data);
	}

	public function selectFromKlasifikasi(){
		$this->db->select('*');
		$this->db->from('klasifikasi');

		$query = $this->db->get();
		return $query -> result();
	}

	public function selectFromKlasifikasiSort(){
        $nilaiK = $this->input->post('K');
		$query = $this->db->query("SELECT * FROM klasifikasi LEFT JOIN tb_tipe ON tb_tipe.ID_TIPE = klasifikasi.JarakKeCluster ORDER BY jarak LIMIT $nilaiK");
		// $this->db->select('*');
		// $this->db->from('klasifikasi');
		// $this->db->join('tb_training','tb_training.KELAS = klasifikasi.JarakKeCluster');
		// $this->db->order_by('jarak');

		// $query = $this->db->get();
		return $query -> result();
	}
	public function kosongKlasifikasi(){
		$this->db->empty_table('klasifikasi');
	}
	public function emptyKlasifikasi(){
		$this->db->empty_table('klasifikasi');	
	}
}