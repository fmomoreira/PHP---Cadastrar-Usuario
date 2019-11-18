<!doctype html>
<html lang="PT-br">

<head>
    <title>Cadastro de Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <form id="salvaruser" style="margin-top:2rem;">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="nameUser">Nome do Usuário</label>
                    <input type="texte" class="form-control" id="nameUser" name="nome" placeholder="Digite um nome de  Usuário">
                    <small id="idUser" class="form-text text-muted">Nome do usuário sera usado para acessar o sistema</small>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
                </div>
            </div>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none; width:50%;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div id="menssagem" class="alert alert-success" role="alert" style="display:none; width:50%;">
        </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:2rem;">Enviar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
    <script>
        $('#salvaruser').submit(function(e) {
            e.preventDefault();
            let formulario = $(this);
            let retorno = inserirformulario(formulario);
        });

        function inserirformulario(dados) {
            $.ajax({
                type: "POST",
                data: dados.serialize(),
                url: "cadastrar_user.php",
                assync: false
            }).then(sucesso, falha);

            function sucesso(data) {
                $sucesso = $.parseJSON(data)["sucesso"];
                $menssagem = $.parseJSON(data)["menssagem"];
                $('#menssagem').show();
                if ($sucesso) {
                    $('#menssagem').html($menssagem);

                } else {
                    $('#menssagem').html($menssagem);

                }
            }

            function falha() {
                console.log("erro");

            }
        }
    </script>
</body>

</html>