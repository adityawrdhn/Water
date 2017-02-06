<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Pakar extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}

			public function load_form_rules()
			{
				$form_rules = array(
					array(
						'field' => 'username',
						'label' => 'Username',
						'rules' => 'required'
						),
					array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'required'
						),
					);
				return $form_rules;
			}

	

    // cek status user, login atau tidak?
			public function cek_user()
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$query = $this->db->select('password,username,nama,foto')
				->from('TB_Pakar')
				->where(array('username' => $username,'password'=> $password))                          
				->get();                         
				if ($query->num_rows() == 1)
				{ 
					$user = $query->row();
					$data = array('username' => $user->username, 'nama' => $user->nama, 'foto' => $user->foto,'login' => TRUE);
            // buat data session jika login benar
					$this->session->set_userdata($data);
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			public function validasi()
			{
				$form = $this->load_form_rules();
				$this->form_validation->set_rules($form);

				if ($this->form_validation->run())
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}

			public function logout()
			{
				$this->session->unset_userdata(array('username' => '','nama' => '', 'login' => FALSE));
				$this->session->sess_destroy();
			}
}






/* End of file E_dpt.php */
/* Location: ./application/models/E_dpt.php */