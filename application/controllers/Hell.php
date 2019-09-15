<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hell extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "Latihan";
	}
	function nil()
	{
		if($this->input->post('kir')) {
			$has = $this->input->post();
			$p1 = $this->input->post('tugas');
			$p2 = $this->input->post('uts');
			$p3 = $this->input->post('uas');
			$hasil = $p1+$p2+$p3;
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
		$this->load->view('hell');

	}
}
