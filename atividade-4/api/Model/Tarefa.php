<?php

class Tarefa {
	
	private $titulo;
	private $id;
	private $descricao;
	private $prioridade;
	
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function setPrioridade($prioridade){
		$this->prioridade = $prioridade;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function getPrioridade(){
		return $this->prioridade;
	}
	 	
} 

?>