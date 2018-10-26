<?php 
include_once '../model/Conexao.class.php';
include_once '../model/Gerenciamento.class.php';
include_once 'dependencias.php'; 

$gerenciamento  = new Gerenciamento();

$id = $_POST['id'];

?>
<br><h2 class="text-center">
    Editar Dados <i class="fa fa-user-edit"></i>
 </h2><hr>


<form method="POST" action="../controller/update_cliente.php">
    <div class="container">
        <div class="form-row">
            
            <?php foreach($gerenciamento->Atualiza("registros",$id) as $cliente_info):  ?>

            <div class="col-md-6">
                Nome: <i class="fa fa-user"></i>
                <input value="<?=$cliente_info['nome']?>" class="form-control" type="text" name="nome" required autofocus><br>
            </div>

            <div class="col-md-6">
                Email: <i class="fa fa-envelope"></i>
                <input value="<?=$cliente_info['email']?>" class="form-control" type="text" name="email" required><br>
            </div>

            <div class="col-md-4">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" value="<?=$cliente_info['cpf']?>" type="text" name="cpf" required id="cpf"><br>
            </div>

            <div class="col-md-4">
                Data de Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" value="<?=$cliente_info['data_nascimento']?>" type="date" name="data_nascimento" required><br>
            </div>

            <div class="col-md-4">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" value="<?=$cliente_info['telefone']?>" name="telefone" id="telefone" required><br>
            </div>

            <div class="col-md-12">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" value="<?=$cliente_info['endereco']?>" type="text" name="endereco" required><br>
            </div>

            <div class="col-md-4">

                <input type="hidden" name="id" value="<?=$cliente_info['id']?>">

                <?php endforeach; ?>

                <button class="btn btn-warning btn-lg">
                    Atualizar Dados <i class="fa fa-user-edit"></i>

                </button><br><br>

                <a href="../index.php">
                    Voltar
                </a>



            </div>


        </div>
    </div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
    $(document).ready(function() {
        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00) 00000-0000");

    });


</script>