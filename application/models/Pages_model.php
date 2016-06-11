<?php
/**
 * Description of Produto_model
 *
 * @author rafael
 */
class Pages_model extends CI_Model {

	public $nome;
	public $numero_pessoas;
	public $ocasiao;
	public $menssagem;
	public $data;

	public function __Construct(){
		parent::__construct();
	}

	public function inserir(){
		return $this->db->insert('menssagem', $this);
	} 
}