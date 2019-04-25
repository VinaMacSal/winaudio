<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anamnese_model extends CI_Model {
	
	//Gera todas as entradas de Anamneses do banco de dados.
	public function getAnamnese() {
		$query = $this->db->get('anamnese');
		return $query->result();
	}

	//Adicionar uma nova entrada de Anamnese.
	public function addAnamnese($dados=NULL) {
		if ($dados != NULL):
			$this->db->insert('anamnese', $dados);
		endif;
	}

	//Recupera uma entrada de Anamnese baseado no ID da mesma.
	public function getAnamneseByID($id=NULL) {
		if ($id != NULL):
			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get('anamnese');
			return $query->row();
		endif;
	}

	//Edita uma entrada de Anamnese baseado no ID da mesma.
	public function editarAnamnese($dados=NULL, $id=NULL) {
		if($dados != NULL && $id != NULL):
			$this->db->update('anamnese', $dados, array('id'=>$id));
		endif;
	}

	//Exclui uma entrada de Anamnese baseado no ID da mesma.
	public function excluirAnamnese($id=NULL) {
		if($id != NULL):
			$this->db->delete('anamnese', array('id'=>$id));
		endif;
	}
}