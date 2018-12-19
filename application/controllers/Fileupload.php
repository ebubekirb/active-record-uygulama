<?php 

class Fileupload extends CI_Controller{

	public function index(){

		$this->load->view("Upload_form");
	}


	public function upload(){

		 $config['upload_path'] = '../../uploads/';
		 $config['allowed_types'] = '*';
		/*config['allowed_types'] = 'gif|jpg|png';
		 config['max_size'] = '100';
		 config['max_width'] = '1024';
		 config['max_height'] = '768';*/

		$this->load->library("upload", $config);
		
		 if (!$this->upload->do_upload("file")) {
		 	
		 	echo "Hatali";
		 }

		 else{

		 	echo "Başarili";
		 }
	}
}

 ?>