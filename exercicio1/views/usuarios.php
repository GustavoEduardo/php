<!DOCTYPE html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercício 1 - Usuários</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="jquery.2.1.3.min.js"></script>
    <script>

            function searchLogin(){
                var search = document.getElementById('search').value;         
           

            $.ajax
            ({
                //Configurações
                type: 'POST',
                dataType: 'html',
                url: 'pesquisarAjax.php',
                beforeSend: function () {
                    $("#dados").html("<img src='loading.gif' id='load'>");
                },
                //Dados para envio
                data: {search: search},
                //função que será executada quando a solicitação for finalizada.
                success: function (msg){                    

                    $("#dados").html(msg);                  
        
                }
            });

            }

    </script>

  
</head>

<body>
<div class="row mt-5">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Usuários</strong>
            </div>
            <div class="card-body">
                <form action="pesquisarAjax.php" method="POST">
                    <div class="row">
                        <p>Encontrar</p>
                        <div class="input-group input-group-sm mb-3">
                            <input placeholder="Digite o Login do usuário" id="search" name="search" type="text" class="form-control" onkeyup="searchLogin();">
                            <span class="input-group-append">
                                <a class="btn btn-info btn-flat fa fa-search"></a>
                              </span>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-10" id="conteudo"></div>                        
                    <div class="col-md-1"></div>
                </div>

                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Login</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="dados">
                    <?php

                    if ($usuarios == null) {
                        $usuarios = $user->searchByName($_POST["search"]);
                    }

                        foreach ($usuarios as $user) {?>
                        <tr>
                            <th scope="row"><?php echo $user["idusuario"]; ?></th>
                            <td><?php echo $user["desnome"]; ?></td>
                            <td><?php echo $user["deslogin"]; ?></td>
                            <td><?php echo $user["dessenha"]; ?></td>
                            <td>
                                <a href="delete.php?id=<?php echo $user["idusuario"]; ?>" class="btn btn-sm btn-danger" title="excluir">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="edite.php?id=<?php echo $user["idusuario"]; ?>" class="btn btn-sm btn-info" title="editar">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                       
                    </tbody>
                </table>
                <div class="col-md-12 mt-5">
                    <a href="add.php" class="btn btn-lg btn-success ml-4 mb-3">Adicionar</a>
                    <a href="listar.php" class="btn btn-lg btn-warning ml-4 mb-3">Listar Todos</a>
                    <a href="sair.php" class="btn btn-lg btn-danger ml-4 mb-3" title="Sair">Sair</a>
                     <a href="gera-csv.php" class="btn btn-lg btn-primary ml-4 mb-3">Gerar CSV</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
   
</body>
</html>
