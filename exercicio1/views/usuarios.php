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

  
</head>

<body>
    <!--<div class="row mt-5">
        <div class="col-lg-6 offset-3">
            
        </div>
    </div>-->
<div class="row mt-5">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Usuários</strong>
            </div>
            <div class="card-body">
                <form action="pesquisar.php" method="POST">
                    <div class="row">
                        <p>Encontrar</p>
                        <div class="input-group input-group-sm mb-3">
                            <input placeholder="Digite o Login ou Nome do usuário" name="search" type="text" class="form-control">
                            <span class="input-group-append">
                                <button class="btn btn-info btn-flat fa fa-search"></button>
                              </span>
                        </div>
                    </div>
                </form>
                
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
                    <tbody>
                        <?php
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
                <div class="col-lg-12 mt-5">
                    <a href="add.php" class="btn btn-lg btn-success">Adicionar</a>
                    <a href="listar.php" class="btn btn-lg btn-info ml-5">Listar Todos</a>
                    <a href="sair.php" class="btn btn-lg btn-danger ml-5" title="Sair">Sair</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
   
</body>
</html>
