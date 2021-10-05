<!DOCTYPE html>
<html>

<head>
    <!-- MetaTags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Estilização CSS (Bootstrap) -->
    <!-- Componentes Gerais -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Sistema de Grid do Bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css">
    <title>Adicionar Cliente</title>
</head>

<body style="background-color:#121212;">
    
    <h5 class="text-center" style="color: white; font-weight: bold; font-size:3vh; margin-top:8vh; margin-bottom: 4vh;"><u><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16"><path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg></span>ADICIONAR CLIENTE</u></h5>
    <form method="post" action="../controller/insert_costumer.php" style="background-color: #141414; padding:2%; width:90%; margin-left: 5%; margin-right: 5%; border: solid 1px white; ">
        <div class="container">
            <div class="form-row" style="color: white; font-size: 2.5vh;">
                
                <div class="col-md-6" style="margin-bottom: 2.5vh;">Nome:
                    <input class="form-control" type="text" name="nome" required autofocus>
                </div>
                <div class="col-md-6" style="margin-bottom: 2.5vh;">E-Mail:
                    <input class="form-control" type="email" name="email" required>
                </div>
                <div class="col-md-4" style="margin-bottom: 2.5vh;">CPF:</i>
                    <input class="form-control" type="text" name="cpf" required id="cpf">
                </div>
                <div class="col-md-4" style="margin-bottom: 2.5vh;">Nascimento:
                    <input class="form-control" type="date" name="dtnascimento" required>
                </div>
                <div class="col-md-4" style="margin-bottom: 2.5vh;">Telefone:
                    <input class="form-control" type="text" name="Telefone" required id="phone">
                </div>
                <div class="col-md-12" style="margin-bottom: 2.5vh;">Endereço:
                    <input class="form-control" type="text" name="Endereco" required><br>
                </div>

                <div class="col-md-6 text-left">
                    <a href="../admin_panel.php" style="text-align: center; font-weight: 600; font-size: 2.5vh; width: 50%;" class="btn btn-sm btn-success"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/><path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/></svg></span> Voltar</a>
                    <br><br>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-sm btn-primary" style="text-align: center; font-weight: 600; font-size: 2.5vh; width: 50%;">Adicionar <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16"><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg></span></button>
                </div> 
            </div>
        </div>
    </form>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00");
            $("#phone").mask("(00) 00000-0000");
        });
    </script>
    <!-- Chamando bibliotecas e páginas js -->
    <!-- Bibliotecas do JQuery (Faz as Animações) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript (Bootstrap) -->
    <!-- JS Geral -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Dropdown -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>