<?php 

require_once(dirname(__FILE__).'/request/Request.php');
require_once(dirname(__FILE__).'/../Service/TarefaService.php');

class Application {
	
    private $request;
    private $tarefaService;
	
    function __construct(){
        $this->request = new Request();
        $this->tarefaService = new TarefaService();
    } 
	
    public function run(){
        if($this->request->isRequestGet()){
            if($this->request->getIdUri()!=''){
                $this->tarefaService->getTarefa($this->request->getIdUri());
            }else{
            	$this->tarefaService->getTarefa('');
            }
        }elseif($this->request->isRequestPost()){
            $this->tarefaService->postTarefa();
        }elseif($this->request->isRequestPut()){
            $this->tarefaService->putTarefa($this->request->getIdUri());
        }elseif($this->request->isRequestDelete()){
            $this->tarefaService->deleteTarefa($this->request->getIdUri());
        }
            
    }

}
