<?php

class Request{
	
	public function getJson(){
		$data = json_decode(file_get_contents('php://input'));
		return $data;
	}
	
	public function enviaJson($data){
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
	public function getServer(){
		return $_SERVER['SERVER_NAME'];
	}
	
	public function getRequest(){
		if(isset($_SERVER['REQUEST_URI'])){
			return $_SERVER['REQUEST_URI']; 
		}
		return "";
	}
	
	public function getModelUri(){
		if($this->getRequest() == '/atividade4/'){
			return ''; 
		}else{
			$dadosUri = explode('/',$this->getRequest());
			if(isset($dadosUri[3]) && $dadosUri[3] != ''){
				return $dadosUri[3];
			}else{
				return '';
			}
		}
		return "";
	}
	
	public function getIdUri(){
		$uri = $this->getRequest();
		if($uri != ''){
			$dados = explode("/", $uri);
			if(isset($dados[1]) && $dados[1] != ''){
				return $dados[1];
			}else{
				return '';
			}
		}else{
			return '';
		}
	}
	
	public function getMethod(){
		if(isset($_SERVER['REQUEST_METHOD'])){
			return $_SERVER['REQUEST_METHOD'];
		}
		return '';
	}
	
	public function isRequestGet(){
		return !strcasecmp($this->getMethod(),'GET');
	}
	
	public function isRequestPost(){
		return !strcasecmp($this->getMethod(),'POST');
	}
	
	public function isRequestDelete(){
		return !strcasecmp($this->getMethod(),'DELETE');
	}
	
	public function isRequestPut(){
		return !strcasecmp($this->getMethod(),'PUT');
	}
	
}  

?>