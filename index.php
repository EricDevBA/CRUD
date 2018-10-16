<!DOCTYPE html>

<?php
include_once 'model/Conexao.class.php';
include_once 'model/Gerenciamento.class.php';

$gerenciamento = new Gerenciamento();

?>

<html>
<head>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>

<div class="container">
	
	<h2 class="text-center"> Lista de Clientes <i class="fa fa-users"></i></h2>

	<h5 class="text-right">
		<a href="view/page_registro.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover-lg">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CPF</th>
					<th>DATA DE NASCIMENTO</th>
					<th>ENDEREÇO</th>
					<th>TELEFONE</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>

			<?php foreach($gerenciamento->ListarClient("registros") as $client):?>
				<tr>
					<td><?php echo $client['id']?></td>
					<td><?php echo $client['nome']?></td>	
					<td><?php echo $client['email']?></td>
					<td><?php echo $client['cpf']?></td>
					<td><?php echo date("d/m/Y",strtotime($client['data_nascimento']));?></td>
					<td><?php echo $client['endereco']?></td>
					<td><?php echo $client['telefone']?></td>
					<td>
						<form method="POST">
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" onclick="return confirm('Tem certeza que deseja excluir ?');">
							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>

	</div>

	<!-- Fim da Tabela -->

</div>

</body>
</html>