<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Atividade 4</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	    
	    <script src="View/js/jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="View/js/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="View/js/bootstrap/css/bootstrap-theme.min.css">
		<script src="View/js/bootstrap/js/bootstrap.min.js"></script>
		<script src="View/js/angular/angular.min.js"></script>
	</head>

	<body>
		
		<div class="container" ng-controller='TarefaController'>
			<h1 class='text-center'>Atividade 4 - Analista Desenvolvedor PHP</h1>
			<button type="button" ng-click='carregarTarefa();' class='btn btn-primary'>Carregar tarefas</button>
			<button type="button" ng-click='novaTarefa();' class='btn btn-primary'>Adicionar tarefa</button>
			<br/><br/>
			<div class='row'>
				<div class='col-sm-12 col-md-6' ng-show='tarefa.show'>
					<input type='text' class='form-control' ng-model='tarefa.titulo' placeholder='título' maxlength="20" />
					<input type='text' class='form-control' ng-model='tarefa.descricao' placeholder='descriçao' maxlength="200" />
					<input type='text' class='form-control' ng-model='tarefa.prioridade' placeholder='prioridade' maxlength="10" />
					<button type="button" ng-click='salvarTarefa();' class='btn btn-primary'>Salvar tarefa</button>
					<button type="button" ng-click='fecharTarefa();' class='btn btn-primary'>Fechar</button>
				</div>
			</div>
			<br/><br/>
			<div class='row'>
				<div class='col-sm-12 col-md-6' ng-repeat='tar in tarefas'>
					Título:{{tar.titulo}}<br />
					Descrição:{{tar.descricao}}<br />
					Prioridade:{{tar.prioridade}}<br />
					<button type="button" ng-click='editarTarefa($index);' class='btn btn-primary'>Editar tarefa</button>
					<button type="button" ng-click='excluirTarefa($index);' class='btn btn-danger'>Excluir tarefa</button>
				</div>
			</div>
		</div>
		
		<script src="View/js/script.js"></script>
	</body>

</html>
