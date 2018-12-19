<?php 

class HelperTest extends CI_Controller{

	public function helper_test(){

		//$this->load->helper("tools_helper");
		//echo topla(10, 20);

		get_full_date(date("Y-m-d"));
	}

}