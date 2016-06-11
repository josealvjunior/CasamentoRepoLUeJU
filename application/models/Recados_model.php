<?php
/**
 * Description of Produto_model
 *
 * @author rafael
 */
class Recados_model extends CI_Model {

	public function __Construct(){
		$this->load->database();
	}
	public function get_recados()
	{
		$this->db->order_by('co_recados','DESC');
		return $this->db->get('recados');

	}


	public function inserir($data){
		$this->db->insert('recados', $data);
	} 
}