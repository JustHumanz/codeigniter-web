<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Ver extends CI_Controller{
    function __construct()
    {
        parent::__construct();

    }

    function index()
    {

      if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
          $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
          $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
      else
        {
          $ip_address = $_SERVER['REMOTE_ADDR'];
        }

      $config['upload_path']          = 'uploads/ver';
      $config['allowed_types']        = 'gif|jpg|png|doc|pdf';
      $config['max_size']             = 100000;
      $config['max_width']            = 1024;
      $config['max_height']           = 1768;

      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('userfile'))
      {
              $error = array('error' => $this->upload->display_errors());

              $this->load->view('ver/ver_doku.html', $error);
      }
      else
      {
              $data = array('upload_data' => $this->upload->data());
              $data['date'] = date("Y-m-d H:i:s");
              $data['ip_address'] = $ip_address;
              $this->load->view('ver/succ_doku', $data);
      }
    }
}
