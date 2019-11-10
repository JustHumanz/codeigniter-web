<?php

   class Test_form extends CI_Controller {

      public function index() {
        $this->load->database();
         /* Load form helper */
         $this->load->helper(array('form','date','url'));

         /* Load form validation library */
         $this->load->library('form_validation');
         /* Set validation rule for name field in the form */
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('v_form');
         }
         else {
            if ($this->input->post('kir')) {
              $username = $this->input->post('username');
              $password = $this->input->post('password');
              $email = $this->input->post('email');
              $dat = array(
                'username' => $username,
                'password' => $password,
                'email' =>   $email
              );
              $tgl = date('Y-m-d');
              $this->load->view('v_form_ber', $dat);
              $sql = "insert into users (username, password, email, tgl)
              VALUES (".$this->db->escape($username).", ".
              $this->db->escape($password).", ".
              $this->db->escape($email).", ".
              $this->db->escape($tgl).")";
              $this->db->query($sql);
            }
         }
      }
      public function user(){
        $this->load->database();
        $data['users'] = $this->db->get('users')->result();
        $this->load->view('user_view',$data);
      }

      public function delete(){
        $this->load->helper('form');
        $this->load->database();
        $data['users'] = $this->db->get('users')->result();
        $this->load->view('del_user',$data);

        if ($this->input->post('send')) {
          $a = $this->input->post('id');
          $b = $this->input->post('user');
          $this->db->delete('users',array('id' => $a,'username' => $b));
          redirect($this->uri->uri_string());
        }


    	}
   }
?>
