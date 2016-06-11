<?php
/**
 * Description of Produto_model
 *
 * @author rafael
 */
class Rsvp_model extends CI_Model {

	public function __Construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inserir($data){
		$this->db->insert('rsvp', $data);
	} 
}