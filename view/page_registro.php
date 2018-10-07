<?php include_once 'dependencias.php'; ?>

<h2 class="text-center">
    Realize seu cadastro! <i class="fa fa-user-plus"></i>
 </h2><hr>


<form method="POST" action="/..controler/insere_cliente">
    <div class="container">
        <div class="form-row">

            <div class="col-md-6">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="name" required autofocus><br>
            </div>

            <div class="col-md-6">
                Email: <i class="fa fa-envelope"></i>
                <input class="form-control" type="text" name="email" required><br>
            </div>

            <div class="col-md-4">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" required><br>
            </div>

            <div class="col-md-4">
                Data de Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="birth" required><br>
            </div>

            <div class="col-md-4">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="phone" required><br>
            </div>

            <div class="col-md-12">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="address" required><br>
            </div>

            <div class="col-md-4">
                <button class="btn-btn-primary btn-lg">
                    Inserir Cliente <i class="fa fa-user-plus"></i>

                </button><br><br>

                <a href="../index.php">
                    Voltar
                </a>



            </div>









        </div>
    </div>

</form>