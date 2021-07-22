<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nativo</title>
</head>
<body>
    <div class="container mt-5">
        <?php echo "Hello Bahia!"; ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#frm-user">
            Adicionar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="frm-user" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
            <div class="modal-header  text-center">
                <h5 class="modal-title" id="staticBackdropLabel">Cadastro Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <input type="text" name="nome" placeholder="Seu nome" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="email" placeholder="Seu E-mail" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="senha" placeholder="Seu Senha" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
