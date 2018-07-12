var app = angular.module('app', []);

app.controller('TarefaController', function($scope,$http,$location) {
	
	$scope.tarefa = {};
	$scope.baseUrl = $location.absUrl();
	$scope.baseApiUrl = 'http://processo-seletivo-atividade-4-api/';
	$scope.tarefas = [];
	$scope.tarefa.show = false;
	
	
	$scope.carregarTarefa = function (){
		$http.get($scope.baseApiUrl).success(
			function(data, status, headers, config) {
				$scope.tarefas = angular.fromJson(data);
				console.log($scope.tarefas);
			}
		).error(
			function(data, status, headers, config) {
			    console.log(data);
			}
		);
	};
	
	$scope.editarTarefa = function (index){
		angular.copy($scope.tarefas[index],$scope.tarefa);
		$scope.tarefa.show = true;
	};
	
	$scope.excluirTarefa = function (index){
		angular.copy($scope.tarefas[index],$scope.tarefa);
		if($scope.tarefa.id != undefined && $scope.tarefa.id != ''){
			$http.delete($scope.baseApiUrl+$scope.tarefa.id).success(
				function(data, status, headers, config) {
					console.log(data);
					alert('Sua tarefa foi excluída com sucesso!');
					$scope.carregarTarefa();
				}
			).error(
				function(data, status, headers, config) {
				    console.log(data);
				    alert('Erro ao excluir sua tarefa.');
				    $scope.carregarTarefa();
				}
			);
		}
	};
	
	$scope.novaTarefa = function (){
		$scope.tarefa.id = undefined;
		$scope.tarefa.titulo = undefined;
		$scope.tarefa.descricao = undefined;
		$scope.tarefa.prioridade = '1';
		$scope.tarefa.show = true;
	};
	
	$scope.fecharTarefa = function (){
		$scope.novaTarefa();
		$scope.tarefa.show = false;
	};
	
	$scope.salvarTarefa = function (){
		if(angular.isUndefined($scope.tarefa.titulo) || $scope.tarefa.titulo == ''){
			alert('Digitar o título');
			return;
		}
		if(angular.isUndefined($scope.tarefa.descricao) || $scope.tarefa.descricao == '' ){
			alert('Digitar o descrição');
			return;
		}
		if($scope.tarefa.id != undefined && $scope.tarefa.id != ''){
			$http.put($scope.baseApiUrl+$scope.tarefa.id,$scope.tarefa).success(
				function(data, status, headers, config) {
					console.log(data);
					alert('Sua tarefa foi salva com sucesso!');
					$scope.carregarTarefa();
				}
			).error(
				function(data, status, headers, config) {
				    console.log(data);
				    alert('Erro ao salvar sua tarefa.');
				    $scope.carregarTarefa();
				}
			);
		}else{
			$http.post($scope.baseApiUrl,$scope.tarefa).success(
				function(data, status, headers, config) {
					console.log(data);
					alert('Sua tarefa foi salva com sucesso!');
					$scope.carregarTarefa();
					$scope.novaTarefa();
				}
			).error(
				function(data, status, headers, config) {
				    console.log(data);
				    alert('Erro ao salvar sua tarefa.');
				    $scope.carregarTarefa();
				    $scope.novaTarefa();
				}
			);
		}
	};
	
});
 
angular.bootstrap(document, ['app']);