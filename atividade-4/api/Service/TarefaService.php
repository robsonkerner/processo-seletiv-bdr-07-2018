<?php

require_once(dirname(__FILE__).'/../Api/bd/DatabaseConnection.php');
require_once(dirname(__FILE__).'/../Api/request/Request.php');
require_once(dirname(__FILE__).'/../Model/Tarefa.php');

class TarefaService {
	
	private $connection;
	private $request;
	
	public function __construct(){
		$this->connection = new DatabaseConnection();
		$this->request = new Request();
	}
	
	public function getTarefa($id){
		$query = "SELECT * FROM tarefas ";
		if(isset($id) && $id != ''){
			$query .= " WHERE id = ".$id;
		}
		$query .= " order by prioridade DESC";
		$result = $this->connection->query($query);
		if($result !== FALSE){
			$tarefas = array();
			while($row = $result->fetch_assoc()){
				$tarefa = array();
				$tarefa['id'] = $row['id'];
				$tarefa['titulo'] = $row['titulo'];
				$tarefa['descricao'] = $row['descricao'];
				$tarefa['prioridade'] = $row['prioridade'];
				$tarefas[] = $tarefa;
			}
			$this->request->enviaJson($tarefas);
		}else{
			$this->request->enviaJson("Erro ao executar a operação.");
		}	
	}
	
	public function postTarefa(){
		$dados = $this->request->getJson();
		
		$tarefa = new Tarefa();
		$tarefa->setTitulo($dados->titulo);
		$tarefa->setDescricao($dados->descricao);
		$tarefa->setPrioridade($dados->prioridade);
		
		$query = "INSERT INTO  tarefas (`id` ,`titulo` ,`descricao` ,`prioridade`)";
		$query .= " VALUES (NULL , '".$tarefa->getTitulo()."', '".$tarefa->getDescricao()."', '".$tarefa->getPrioridade()."');";
		
		$return = $this->connection->query($query);
		
		if($return === TRUE){
			$this->request->enviaJson($dados);
		}else{
			$this->request->enviaJson("Erro ao executar a operação.");
		}
	}
	
	public function putTarefa($id){
		$dados = $this->request->getJson();
		
		if(isset($id) && $id != ''){
			
			$tarefa = new Tarefa();
			$tarefa->setTitulo($dados->titulo);
			$tarefa->setDescricao($dados->descricao);
			$tarefa->setPrioridade($dados->prioridade);
			
			$query = "UPDATE tarefas SET titulo = '".$tarefa->getTitulo()."', descricao = '".$tarefa->getDescricao()."', prioridade = '".$tarefa->getPrioridade()."' WHERE id = ".$id;
			
			$return = $this->connection->query($query);
			
			if($return === TRUE){
				$this->request->enviaJson($dados);
			}else{
				$this->request->enviaJson("Erro ao executar a operação.");
			}
		}
	}
		
	public function deleteTarefa($id){
		if(isset($id) && $id != ''){
			$result = $this->connection->query("DELETE FROM tarefas WHERE id = ".$id);
			if($result === TRUE){
				$this->request->enviaJson($id);
			}else{
				$this->request->enviaJson("Erro ao executar a operação.");
			}	
		}
	}	
	
} 

?>