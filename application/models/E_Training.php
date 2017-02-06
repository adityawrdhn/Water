<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Training extends CI_Model {

	public $variable;
	var $klasifikasi=0;
	var $sayap=0;


	public function __construct(){
		// parent::__construct();
		$this->load->database();
	}

	public function getTraining(){
		$query = $this->db-> get('TB_TRAINING');
		return $query->result();	
	}

	public function ambilSatu($id){
		$query = $this->db-> query("SELECT * FROM TB_TRAINING WHERE NO='$id' ");
		return $query->result();	
	}

	// public function hitungJarak(){ 
	// 	$training = $this->getTraining(); 
	// 	$uji[$indeks]=$this->input->post('Ph'.$indeks);
	// 	$uji[$indeks]=$this->input->post('TDS'.$indeks);
	// 	$uji[$indeks]=$this->input->post('opsino'.$indeks);
	// 	$uji[$indeks]=$this->input->post('opsino'.$indeks);

	// 	$indeks=1; 
	// 	foreach($training as $row) { 
	// 		$jumlah=0; 
	// 		for ($counter=1; $counter <= 72;$counter++) {  
	// 			$soal="SOAL".$counter;
	// 			$panjang[$counter]=$uji[$counter]-$row->$soal; 
	// 			$jumlah +=$panjang[$counter]; 
	// 		} 
	// 		$jarak[$indeks] = pow(pow(abs($jumlah), 2), (1/2));
	// 		asort($jarak); 
	// 		$indeks++;
	// 	}
	// 	asort($jarak);
	// 	$counter2=1;
	// 	foreach ($jarak as $key => $val) {
	// 		// echo "Array[" . $key . "] = " . $val . "\n";
	// 		// echo "<br>";
	// 		$id[$counter2]=$key;
	// 		$temp=$this->ambilSatu($counter2);
	// 		foreach($temp as $row) {
	// 			$indek[$counter2]=$row->TIPE;
	// 		} 
	// 		$value[$counter2]=pow($val,-2);
	// 		$counter2++;
			
	// 	}
	// 	$tipe[1]=0;$tipe[2]=0;$tipe[3]=0;$tipe[4]=0;$tipe[5]=0;$tipe[6]=0;$tipe[7]=0;$tipe[8]=0;$tipe[9]=0;
	// 	for ($i=1; $i <=7 ; $i++) { 
	// 		if($indek[$i]==1){
	// 			$tipe[1]+=$value[$i];
	// 			// echo "Tipe 1 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==2){
	// 			$tipe[2]+=$value[$i];
	// 			// echo "Tipe 2 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==3){
	// 			$tipe[3]+=$value[$i];
	// 			// echo "Tipe 3 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==4){
	// 			$tipe[4]+=$value[$i];
	// 			// echo "Tipe 4 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==5){
	// 			$tipe[5]+=$value[$i];
	// 			// echo "Tipe 5 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==6){
	// 			$tipe[6]+=$value[$i];
	// 			// echo "Tipe 6 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==7){
	// 			$tipe[7]+=$value[$i];
	// 			// echo "Tipe 7 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==8){
	// 			$tipe[8]+=$value[$i];
	// 			// echo "Tipe 8 = ".$value[$i]."<br>";
	// 		}else if($indek[$i]==9){
	// 			$tipe[9]+=$value[$i];
	// 			// echo "Tipe 9 = ".$value[$i]."<br>";
	// 		}
	// 	}

	// 	$pembagi=0;
	// 	foreach ($tipe as $key => $value) {
	// 		$pembagi+=$value;
	// 		// echo "Array[" . $key . "] = " . $value . "\n";
	// 		// echo "<br>";
	// 	}

	// 	// echo $pembagi."<br>";

	// 	$tipe[1]/=$pembagi;
	// 	$tipe[2]/=$pembagi;
	// 	$tipe[3]/=$pembagi;
	// 	$tipe[4]/=$pembagi;
	// 	$tipe[5]/=$pembagi;
	// 	$tipe[6]/=$pembagi;
	// 	$tipe[7]/=$pembagi;
	// 	$tipe[8]/=$pembagi;
	// 	$tipe[9]/=$pembagi;

	// 	// foreach ($tipe as $key => $value) {
	// 	// 	echo "Array[" . $key . "] = " . $value . "\n";
	// 	// 	echo "<br>";
	// 	// }

	// 	// $harus1=0;
	// 	// foreach ($tipe as $key => $value) {
	// 	// 	$harus1+=$value;
	// 	// 	echo "Array[" . $key . "] = " . $value . "\n";
	// 	// 	echo "<br>";
	// 	// }
	// 	// echo "Harus 1= ".$harus1."<br>";

	// 	arsort($tipe);
	// 	// echo "<br>";
	// 	foreach ($tipe as $key => $value) {
	// 		// echo "Array[" . $key . "] = " . $value . "\n";
	// 		// echo "<br>";
	// 		$hasil=$key;
	// 		break;
	// 	}
	// 	// echo $hasil;
	// 	$wing1=$hasil+1;
	// 	$wing2=$hasil-1;
	// 	if($wing1==10){
	// 		$wing1=1;
	// 	}
	// 	if($wing2==0){
	// 		$wing2=9;
	// 	}
	// 	$wing=$wing2;
	// 	if($wing1>$wing2){
	// 		$wing=$wing1;
	// 	}
	// 	// echo $wing;
	// 	$array = array('tipe' => $hasil, 'wing' => $wing);
	// 	$this->klasifikasi=$hasil;
	// 	$this->sayap=$wing;
		
	// }
	public function getTipe(){
		return $this->klasifikasi;
	}

	public function updateBobot($id)
	{
		$data = array (
			'PH'  => $this->input->post('PH'),
			'TDS'  => $this->input->post('TDS'),
			'EC'  => $this->input->post('EC'),
			'T'  => $this->input->post('T'),
			'TIPE'  => $this->input->post('TIPE'),
			'AFFECT'  => $this->input->post('AFFECT')
			);  
		$this->db->update('TB_TRAINING',$data, array('NO'=>$id));
	}



}

/* End of file E_uji[.php */
/* Location: ./application/models/E_uji[.php */