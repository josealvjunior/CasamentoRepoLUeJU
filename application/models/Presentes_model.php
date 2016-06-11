<?php
/**
 * Description of Produto_model
 *
 * @author rafael
 */
class Presentes_model extends CI_Model {

	public function __Construct(){
		parent::__construct();
		$this->load->database();
	}

	public function pagSeguro($data)
	{
		$this->db->insert('presentes_pag_seguro', $data);
	}

	public function inserir($data)
	{
		$this->db->insert('depositos', $data);
	} 
}