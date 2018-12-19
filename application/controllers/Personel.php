<?php 

class Personel extends CI_Controller{

	public function index(){

		$rows = $this->db->get("personel")->result();

		/*$viewData = array(
			"rows" => $rows;
		)*/

		$viewData = new stdClass();
		$viewData->rows = $rows;

		$this->load->view("listeleme", $viewData);
	}



	public function updatePage(){

		$id = $this->uri->segment(3);
		$row = $this
			->db
			->where("id", $id)
			->get("personel")->row();
		
		$viewData = new stdClass();

		$viewData->row = $row;
		$this->load->view("Duzenle", $viewData);
	}



	public function update($id){

		// echo $id;
		$title = $this->input->post("title");
		$detail = $this->input->post("detail");

		$data = array(

			"title" 	=> $title,
			"detail" 	=> $detail
		);

		$update = $this
			->db
			->where("id", $id)
			->update("personel", $data);

			echo $update;

			if ($update) {
				
				redirect(base_url("personel"));
			}

			else{

				echo "DDüzenleme işlemi sırasında bir problem oluştu..";
			}
	}



	public function insertPage(){

		$this->load->view("Ekle");
	}



	public function insert(){

		$title = $this->input->post("title");
		$detail = $this->input->post("detail");

		$data = array(

			"title" 	=> $title,
			"detail"	=> $detail
		);

		$insert = $this->db->insert("personel", $data);
		if ($insert) {
			redirect(base_url("personel"));
		}

		else{
			echo "Kayıt Başarılı Değildir";
		}
		echo $insert;
	}



	public function delete($id){

		$delete = $this->db->where("id", $id)->delete("personel");

		if ($delete) {
			
			redirect(base_url("personel"));
		}

		else{

			echo "Silme işlemi sırasında bir problem oluştu!!!";
		}
	}


	public function sirala(){

		// echo "Burada siralama işlemi yapilacaktir";

		$gelen = $this->input->post("sira");

		$rows = $this
			->db
			->order_by("$gelen", "asc")
			->get("personel")
			->result();

		$viewData = new stdClass();
		$viewData->rows = $rows;

		$this->load->view("listeleme", $viewData);
	
	}



	public function model(){

		$this->load->model("personel_model");

		$result = $this->personel_model->get();

		$delete = $this->personel_model->delete(11);

		print_r($result);

		echo $delete;
	}



	public function model_usage(){

		$this->load->model("personel_model");

		//Veri Cekme
		/*$result = $this->personel_model->get(array("id" => 3));
		print_r($result);
		echo "<hr>";*/
		$result = $this->personel_model->get_all(array("id >" => 3));
		print_r($result);

		//Veri Silme
		/*$delete = $this->personel_model->delete(array("id" => 7));
		echo $delete;*/

		//Veri Ekleme
		/*$data = array(

			"title" 	=> "Emre İrem",
			"detail" 	=>"Değişik bir çocuk"
		);

		$insert = $this->personel_model->insert($data);*/

		//echo $insert;

		//Veri Guncelleme
		/*$data = array(

			"title" 	=> "Emre",
			"detail" 	=> "Deneme yazisi"
		);

		$where = array(

			"id" => 15
		);

		$update = $this->personel_model->update($data, $where);
		echo $update;*/


		//Custom Query
		//$query = $this->personel_model->query("SELECT *from personel LIMIT 2");
		//print_r($query);

		//Last insert id
		//echo $this->personel_model->get_last_id();
	}


}

?>