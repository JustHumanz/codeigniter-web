<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Doku_model');
        $this->load->model('Admin_model');

    }

    function index()
    {
      $this->load->view('login/login', array('error' => ''));
      if ($this->input->post('kir')) {
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        $db2 = $this->load->database('db_2', TRUE);
        $query = $db2->query("Select * from hash_dok.Admin where Username=".$db2->escape($username)."and Password=".$db2->escape($password).";");
        $row = $query->row();
        if (isset($row))
        {
          $data_session = array(
            'nama' => $username,
            'status' => "login"
          );
          $this->session->set_userdata($data_session);
          redirect(base_url("index.php/doku"));

        }
        else {
          echo "Username & password salah";
          redirect(base_url("index.php/Login"));
        }
      }
    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect(base_url("index.php/Login"));
    }
}