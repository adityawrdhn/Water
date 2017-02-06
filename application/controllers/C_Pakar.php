<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Pakar extends CI_Controller
{
  public $data = array('pesan'=> '');

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('E_Pakar', 'login', TRUE);
    $this->load->model('E_Pengguna');
  }

  public function index()
  {
		// status user login = BENAR, pindah ke halaman absen
    if ($this->session->userdata('login') == TRUE)
    {
      $this->load->view('dashboard');
    }
        // status login salah, tampilkan form login
    else
    {
            // validasi sukses
      if($this->login->validasi())
      {
                // cek di database sukses
        if($this->login->cek_user())
        {
          redirect('C_Pakar/dashboard');
        }
                // cek database gagal
        else
        {
          $this->data['pesan'] = 'Username atau Password salah.';
          ?>
          <script language="JavaScript">alert('Maaf .. Username atau Password salah! Periksa Capslock Anda.');
          </script> 
          <?php
          $this->load->view('home', $this->data);
        }
      }
            // validasi gagal
      else
      {
        $this->load->view('home', $this->data);
      }
    }
  }
  public function logout() {
        $this->session->unset_userdata('login');
        redirect('C_Main');
    }
  
  public function dashboard()
  {
    $this->load->view('dashboard');
  }

  public function kelolaSoal()
  {
    $data['query']=$this->E_Soal->getSoal();
    $this->load->view('kelolaSoal',$data);
  }

  public function editSoal($id)
  {
    $data['query']=$this->E_Soal->ambilSatu($id);
    $this->load->view('editSoal',$data);
  }

  public function kelolaBobot()
  {
    $data['query']=$this->E_Training->getTraining();
    $this->load->view('kelolaBobot',$data);
  }

  public function editBobot($id)
  {
    $data['query']=$this->E_Training->ambilSatu($id);
    $this->load->view('editBobot',$data);
  }
  public function updateBobot($id)
  {
    $this->E_Training->updateBobot($id);
    redirect('C_Pakar/kelolaBobot');
  }

  public function hapusSoal($id)
  {
    $data['query']=$this->E_Soal->hapusSatu($id);
    redirect('C_Pakar/kelolaSoal');
  }

  public function updateSoal($id)
  {
    $this->E_Soal->updateSoal($id);
    redirect('C_Pakar/kelolaSoal');
  }

  public function listPengguna()
  {
    $data['query']=$this->E_Pengguna->getPengguna();
    $this->load->view('listPengguna',$data);
  }

  public function dalamPerbaikan()
  {
    $this->load->view('dalamPerbaikan');
  }

 
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */