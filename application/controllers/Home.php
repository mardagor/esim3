<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function index() {
	echo "Tämä on Home-contollerin index-funktio";
}

public function toka() {
	echo "Tämä on Home-contollerin toka-funktio";
}

public function kolmas() {
	$data['nimet']=array(
		array("en"=>'Jussi',"sn"=>'Virta'),
		array("en"=>'Antti',"sn"=>'Virta'),
		array("en"=>'Mikko',"sn"=>'Virta')
		);

	$this->load->view('home/kolmas');
}

}