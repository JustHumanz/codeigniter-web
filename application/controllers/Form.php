<?php

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('tugas2');
	}

	function aksi(){
		$this->form_validation->set_rules('tugas','Tugas','required');
		$this->form_validation->set_rules('uts','Uts','required');
		$this->form_validation->set_rules('uas','Uas','required');

		if($this->form_validation->run() != false){
			if($this->input->post('kir')) {
				$p1 = $this->input->post('tugas');
				$p2 = $this->input->post('uts');
				$p3 = $this->input->post('uas');
				//$hasil = $p1+$p2+$p3;
				$pp = $p1*0.4 + $p2*0.3 + $p3*0.3;

				if ($pp>=80) {
				$grade = "A";
				}
				elseif ($pp>=70){
				$grade = "B";
				}
				elseif ($pp>=50){
				$grade = "C";
				}
				elseif ($pp>=40){
				$grade = "D";
				}
				else{
				$grade = "E";
				}
				echo "Nilai Kamu ".$pp." Grade yang didapat ".$grade;
			}
			$this->load->view('tugas2');
		}else{
			echo "Not OK >:( ";
		}
	}
}
