<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anamnese extends CI_Controller {

	//Gera a lista de Anamenses, página inicial.
	public function index() {
		$this->load->model('anamnese_model', 'anamneses');
		$data['anamneses'] = $this->anamneses->getAnamnese();
		$this->load->view('lista_anamnese', $data);
	}

	//Inicia a View para o cadastro de uma nova Anamnese.
	public function adicionar() {
		$this->load->model('anamnese_model', 'anamneses');
		$this->load->view('adiciona_anamnese');
	}

	//Adiciona uma nova entrada de Anamnese.
	public function salvar() {
		if($this->input->post('pergunta') == NULL) {
			echo 'O campo Anamnese é obrigatório.';
			echo '<a href="adicionar" title="Voltar">Voltar</a>';
		}
		elseif($this->input->post('resposta') == NULL) {
			echo 'O campo Resposta é obrigatório.';
			echo '<a href="adicionar" title="Voltar">Voltar</a>';
		} else {
			$this->load->model('anamnese_model', 'anamneses');
			$dados['pergunta'] = $this->input->post('pergunta');
			$dados['resposta'] = $this->input->post('resposta');
			$this->anamneses->addAnamnese($dados);
			redirect("/");
		}
	}

	//Alterar um registro já salvo de Anamnese.
	public function salvarAlterar() {
		if($this->input->post('pergunta') == NULL) {
			echo 'O campo Anamnese é obrigatório.';
			echo '<a href="/winaudio/anamnese/alterar/'.$this->input->post('id').'" title="Voltar">Voltar</a>';
		} else {
			$this->load->model('anamnese_model', 'anamneses');
			$dados['pergunta'] = $this->input->post('pergunta');
			$dados['resposta'] = $this->input->post('resposta'); 
			$this->anamneses->editarAnamnese($dados, 
				$this->input->post('id'));
			redirect("/");
		}
	}

	//Inicia a View para alteração de uma Anamnese.
	public function alterar($id=NULL) {
		if ($id == NULL) {
			redirect("/");
		}
		$this->load->model('anamnese_model', 'anamneses');
		$query = $this->anamneses->getAnamneseByID($id);
		if ($query == NULL) {
			redirect("/");
		}
		$dados['anamneses'] = $query;
		$this->load->view('alterar_anamnese', $dados);

	}

	//Visualizar uma Anamnese já cdastrada.
	public function visualizar($id=NULL) {
		if ($id == NULL) {
			redirect("/");
		}
		$this->load->model('anamnese_model', 'anamneses');
		$query = $this->anamneses->getAnamneseByID($id);
		if ($query == NULL) {
			redirect("/");
		}
		$dados['anamneses'] = $query;
		$this->load->view('visualizar_anamnese', $dados);

	}

	//Excluir um registor de uma Anamnese.
	public function excluir($id=NULL) {
		if($id == NULL) {
			redirect("/");
		}
		$this->load->model('anamnese_model', 'anamneses');
		$query = $this->anamneses->getAnamneseByID($id);
		if($query != NULL) {
			$this->anamneses->excluirAnamnese($query->id);
			redirect("/");
		} else {
			redirect("/");
		}
	}
}
