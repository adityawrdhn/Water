<?php if (!defined('BASEPATH')) exit('No direct scPhpt access allowed');

class C_Main extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      $this->load->model('E_Soal');
      $this->load->model('E_Pengguna');
  }

    public function index(){
        $this->load->view('home');
    }

    public function home(){
        $this->load->view('home');
    }

    public function introduction(){
        $this->load->view('introduction');
    }

    public function macamTipe(){
        $data['tipe'] = $this->E_Pengguna->allTipe();
        $this->load->view('macamTipe', $data);
    }

    public function single($id)
    {
        $data['tipeD'] = $this->E_Pengguna->single($id);
        $this->load->view('macamTipeDetail', $data);
    }

     // public function macamInsting(){
     //     $this->load->view('macamInsting');
     // }

    public function systemWork(){
        $this->load->view('systemWork');
    }

    public function misidentification(){
        $this->load->view('misidentification');
    }

    // public function hubunganTipe(){
    //     $this->load->view('hubunganTipe');
    // }
    public function dalamPerbaikan()
      {
        $this->load->view('dalamPerbaikan');
      }

    public function team(){
        $this->load->view('team');
    }

    public function preTest(){
        $this->load->view('preTest');
    }

    public function mulaiTest(){
        $this->E_Pengguna->insertDataPengguna();
        $dataa['query']=$this->E_Soal->getSoal();
        $this->load->view('test',$dataa);
    }

    public function hitung(){
        $this->E_Training->hitungJarak();
        $data['tipe']=$this->E_Training->getTipe();
        $data['sayap']=$this->E_Training->getSayap();

        $pengguna=$this->session->userdata('id_pengguna');
        $this->E_Pengguna->updatePengguna($pengguna,$data);

        $data['dataTipe']=$this->E_Pengguna->getDataTipe($data['tipe']);
        $data['dataSayap']=$this->E_Pengguna->getDataTipe($data['sayap']);

        $this->load->view('hasil',$data);
    }
    public function cari(){
        $this->load->model('E_Hitung');
        // $this->load->model('');
        $this->E_Hitung->kosongTabelKluster();
        $tepat = 0;
        
        $PH = $this->input->post('PH');
        $TDS = $this->input->post('TDS');
        $EC = $this->input->post('EC');
        $T = $this->input->post('T');
        $K = $this->input->post('K');
        // $Class = $this->input->post('class');
        $data = array (
            'PH'  => $PH,
            'TDS'  => $TDS,
            'EC'  => $EC,
            'T'  => $T,
        );  
        $this->E_Hitung->insertToKluster($data);
        $this->E_Hitung->kosongKlasifikasi();
        $result = $this->E_Hitung->selectAllFromKluster();
        // for ($i=1; $i <= 21 ; $i++) { 
        //     $JmlAnggotaKluster = $this->E_Hitung->countRowFromTempDanDataTraining('C'.$i);
        //     $hasil2 =  $this->E_Hitung->selectFromTempDanDataTraining('C'.$i);
        foreach ($result as $key1) {
                $tempPh = $key1 -> PH;
                $tempTDS = $key1 -> TDS;
                $tempEC = $key1 -> EC;
                $tempT = $key1 -> T;
                $insertJarak = array(
                    'JarakKeCluster' => $key1-> KELAS,
                    'jarak' => sqrt(pow($PH - $tempPh, 2) + pow($TDS - $tempTDS, 2) + pow($EC - $tempEC, 2) + pow($T - $tempT, 2))
                );
                $this->E_Hitung->insertToKlasifikasi($insertJarak);
            }
        // }
        $lempar['result'] = $this->E_Hitung->selectFromKlasifikasi();
        $lempar['PH'] = $PH ;
        $lempar['TDS'] = $TDS ;
        $lempar['EC'] = $EC ;
        $lempar['T'] = $T ;
        // $lempar['sorting'] = asort($this->E_Hitung->selectFromKlasifikasi());

        // $lempar['Class'] = $Class;
        $lempar['JARAKTERPENDEK'] = $this->E_Hitung->selectFromKlasifikasiSort();

         $query = $this->E_Hitung->selectFromKlasifikasiSort();

        foreach ($query as $key2) {
            $in = array(
                'TIPE' => $key2 -> TIPE,
                'AFFECT'=> $key2 -> AFFECT 
            );
            
        }
        $this->load->model('E_Pengguna');
            $pengguna=$this->session->userdata('id_pengguna');
            $this->E_Pengguna->updatePengguna($pengguna,$in);

        $this->load->view('hasil',$lempar) ;

        // $this->E_Hitung->kosongKlasifikasi();
        // $this->E_Hitung->kosongKlasifikasi();

        // $Ph = $this->input->post('Ph2');
        // $Na = $this->input->post('Na2');
        // $Mg = $this->input->post('Mg2');
        // $Al = $this->input->post('Al2');
        // $Class = $this->input->post('class2');

        // foreach ($result as $key1) {
        //         $tempPh = $key1 -> PH;
        //         $tempNa = $key1 -> TDS;
        //         $tempMg = $key1 -> EC;
        //         $tempAl = $key1 -> T;
        //         $insertJarak = array(
        //             'JarakKeCluster' => $key1 -> NamaCluster,
        //             'jarak' => sqrt(pow($Ph - $tempPh, 2) + pow($Na - $tempNa, 2) + pow($Mg - $tempMg, 2) + pow($Al - $tempAl, 2))
        //         );
        //         $this->E_Hitung->insertToKlasifikasi($insertJarak);
        //     }

        // $lempar['result'] = $this->E_Hitung->selectFromKlasifikasi();
        // $lempar['Ph'] = $Ph ;
        // $lempar['TDS'] = $Na;
        // $lempar['EC'] = $Mg ;
        // $lempar['T'] = $Al ;
        // $lempar['Class'] = $Class;
        // $lempar['kelas'] = $this->E_Hitung->selectFromKlasifikasiSort();

        // $query = $this->E_Hitung->selectFromKlasifikasiSort();

        // foreach ($query as $key) {
        //     if ($Class == $key -> kelas) {
        //         $tepat = $tepat + 1;
        //     }
        //     break;
        // }

        // $this->load->view('table',$lempar) ;

        // $this->E_Hitung->kosongKlasifikasi();

        // $Ph = $this->input->post('Ph3');
        // $Na = $this->input->post('Na3');
        // $Mg = $this->input->post('Mg3');
        // $Al = $this->input->post('Al3');
        // $Class = $this->input->post('class3');

        // foreach ($result as $key1) {
        //         $tempPh = $key1 -> PH;
        //         $tempNa = $key1 -> TDS;
        //         $tempMg = $key1 -> EC;
        //         $tempAl = $key1 -> T;
        //         $insertJarak = array(
        //             'JarakKeCluster' => $key1 -> NamaCluster,
        //             'jarak' => sqrt(pow($Ph - $tempPh, 2) + pow($Na - $tempNa, 2) + pow($Mg - $tempMg, 2) + pow($Al - $tempAl, 2))
        //         );
        //         $this->E_Hitung->insertToKlasifikasi($insertJarak);
        //     }

        // $lempar['result'] = $this->E_Hitung->selectFromKlasifikasi();
        // $lempar['Ph'] = $Ph ;
        // $lempar['TDS'] = $Na;
        // $lempar['EC'] = $Mg ;
        // $lempar['T'] = $Al ;
        // $lempar['Class'] = $Class;
        // $lempar['kelas'] = $this->E_Hitung->selectFromKlasifikasiSort();

        // $query = $this->E_Hitung->selectFromKlasifikasiSort();

        // foreach ($query as $key) {
        //     if ($Class == $key -> kelas) {
        //         $tepat = $tepat + 1;
        //     }
        //     break;
        // }

        // $this->load->view('table',$lempar) ;

        // $this->E_Hitung->kosongKlasifikasi();

        // $Ph = $this->input->post('Ph4');
        // $Na = $this->input->post('Na4');
        // $Mg = $this->input->post('Mg4');
        // $Al = $this->input->post('Al4');
        // $Class = $this->input->post('class4');

        // foreach ($result as $key1) {
        //         $tempPh = $key1 -> PH;
        //         $tempNa = $key1 -> TDS;
        //         $tempMg = $key1 -> EC;
        //         $tempAl = $key1 -> T;
        //         $insertJarak = array(
        //             'JarakKeCluster' => $key1 -> NamaCluster,
        //             'jarak' => sqrt(pow($Ph - $tempPh, 2) + pow($Na - $tempNa, 2) + pow($Mg - $tempMg, 2) + pow($Al - $tempAl, 2))
        //         );
        //         $this->E_Hitung->insertToKlasifikasi($insertJarak);
        //     }

        // $lempar['result'] = $this->E_Hitung->selectFromKlasifikasi();
        // $lempar['Ph'] = $Ph ;
        // $lempar['TDS'] = $Na;
        // $lempar['EC'] = $Mg ;
        // $lempar['T'] = $Al ;
        // $lempar['Class'] = $Class;
        // $lempar['kelas'] = $this->E_Hitung->selectFromKlasifikasiSort();

        // $query = $this->E_Hitung->selectFromKlasifikasiSort();

        // foreach ($query as $key) {
        //     if ($Class == $key -> kelas) {
        //         $tepat = $tepat + 1;
        //     }
        //     break;
        // }

        // $this->load->view('table',$lempar) ;

        // $this->E_Hitung->kosongKlasifikasi();

        // $Ph = $this->input->post('Ph5');
        // $Na = $this->input->post('Na5');
        // $Mg = $this->input->post('Mg5');
        // $Al = $this->input->post('Al5');
        // $Class = $this->input->post('class5');

        // foreach ($result as $key1) {
        //         $tempPh = $key1 -> PH;
        //         $tempNa = $key1 -> TDS;
        //         $tempMg = $key1 -> EC;
        //         $tempAl = $key1 -> T;
        //         $insertJarak = array(
        //             'JarakKeCluster' => $key1 -> NamaCluster,
        //             'jarak' => sqrt(pow($Ph - $tempPh, 2) + pow($Na - $tempNa, 2) + pow($Mg - $tempMg, 2) + pow($Al - $tempAl, 2))
        //         );
        //         $this->E_Hitung->insertToKlasifikasi($insertJarak);
        //     }

        // $lempar['result'] = $this->E_Hitung->selectFromKlasifikasi();
        // $lempar['Ph'] = $Ph ;
        // $lempar['TDS'] = $Na;
        // $lempar['EC'] = $Mg ;
        // $lempar['T'] = $Al ;
        // $lempar['Class'] = $Class;
        // $lempar['kelas'] = $this->E_Hitung->selectFromKlasifikasiSort();

        // $query = $this->E_Hitung->selectFromKlasifikasiSort();

        // foreach ($query as $key) {
        //     if ($Class == $key -> kelas) {
        //         $tepat = $tepat + 1;
        //     }
        //     break;
        // }

        // menentukan presentase
        // $data['persentase'] = $tepat;

        // $this->load->view('table',$lempar) ;
        // $this->load->view('persentasi',$data);

        // $this->E_Hitung->kosongKlasifikasi();

        
    }
    public function kosong(){
        $this->load->model('E_Hitung');
        $this->E_Hitung->selectAllFromKluster();

    }

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */