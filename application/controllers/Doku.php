<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Doku extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Doku_model');
    }

    /*
     * Listing of doku
     */
    function index()
    {

      if($this->session->userdata('status') != "login") {
          return redirect('Login');
      }
      else {
        $data['doku'] = $this->Doku_model->get_all_doku();
        $data['_view'] = 'doku/index';
        $this->load->view('layouts/main',$data);
      }
      
    }

    /*
     * Adding a new doku
     */
     /*
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'N_dokument' => $this->input->post('N_dokument'),
				'H_dokument' => $this->input->post('H_dokument'),
				'W_dokument' => $this->input->post('W_dokument'),
            );

            $doku_id = $this->Doku_model->add_doku($params);
            redirect('doku/index');
        }
        else
        {
            $data['_view'] = 'doku/add';
            $this->load->view('layouts/main',$data);
        }
    }
    */
    function add()
    {
      $this->load->view('ver/upload_form', array('error' => ''));
    }

    function do_upload()
    {
            $config['upload_path']          = 'uploads';
            $config['allowed_types']        = 'gif|jpg|png|doc|pdf';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 1768;

            $this->load->library('upload', $config);
            $tgl = date('Y-m-d');
            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('ver/upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $data['nama'] = $this->input->post('nama');
                    $data['tgl'] = $tgl;
                    $this->load->view('ver/upload_success', $data);
            }
    }
    /*
     * Editing a doku
     */
    function edit($id)
    {
        // check if the doku exists before trying to edit it
        $data['doku'] = $this->Doku_model->get_doku($id);

        if(isset($data['doku']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'N_dokument' => $this->input->post('N_dokument'),
					'W_dokument' => $this->input->post('W_dokument'),
                );

                $this->Doku_model->update_doku($id,$params);
                redirect('doku/index');
            }
            else
            {
                $data['_view'] = 'doku/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The doku you are trying to edit does not exist.');
    }

    /*
     * Deleting doku
     */
    function remove($id)
    {
        $doku = $this->Doku_model->get_doku($id);

        // check if the doku exists before trying to delete it
        if(isset($doku['id']))
        {
            $this->Doku_model->delete_doku($id);
            redirect('doku');
        }
        else
            show_error('The doku you are trying to delete does not exist.');
    }

}
