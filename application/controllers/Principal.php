<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){

		parent::__construct();
		
		$this->load->helper('array');
	}

	public function index(){


		$this->load->view('home');

	}


	public function gerarCrud(){

		$data['campo1'] = $this->input->post('campo1');
		$data['campo2'] = $this->input->post('campo2');
		$data['campo3'] = $this->input->post('campo3');
		$data['campo4'] = $this->input->post('campo4');
		$data['campo5'] = $this->input->post('campo5');

		$array['campos'] = array(

			'campo1' => "".'$data'."[".$data['campo1']."] = ".'$this'."->input->post(".$data["campo1"].");",
			'campo2' => "".'$data'."[".$data['campo2']."] = ".'$this'."->input->post(".$data['campo2'].");",
			'campo3' => "".'$data'."[".$data['campo3']."] = ".'$this'."->input->post(".$data['campo3'].");",
			'campo4' => "".'$data'."[".$data['campo4']."] = ".'$this'."->input->post(".$data['campo4'].");",
			'campo5' => "".'$data'."[".$data['campo5']."] = ".'$this'."->input->post(".$data['campo5'].");"

		);

		if($this->input->post('acao') == "insert"){	

			$array['controller'] = "".'$this'."->model->insertDados(".'$data'.");";
			$array['model'] = "".'$this'."->db->insert(".'$data'.");";

			$this->load->view('home2', $array);

		}

		else if($this->input->post('acao') == "update"){

			$array['controller'] = "".'$this'."->model->updateDados(".'$atributoChave'.", ".'$data'.");";
			$array['model'] = "".'$this'."->db->where('atributoChave', ".'$atributoChave'.");";
			$array['model2'] = "".'$this'."->db->update('nomeTabela', ".'$data'.");";

			$this->load->view('home2', $array);
		}

		else if($this->input->post('acao') == "delete"){

			$array['controller'] = "".'$this'."->model->deleteDados(".'$atributoChave'.", ".'$data'.");";
			$array['model'] = "".'$this'."->db->where('atributoChave', ".'$atributoChave'.");";
			$array['model2'] = "".'$this'."->db->delete('nomeTabela', ".'$data'.");";

			$this->load->view('home2', $array);
		}
	}

}
