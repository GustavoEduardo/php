


<!DOCTYPE html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercício 1 - Editar usuário</title>
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

 
<div class="row mt-5">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Editar usuário</strong>
            </div>
            <div class="card-body">
                <form action="edite.php" method="POST">
                    <div class="form-group">
                        <label class=" form-control-label">Login</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-user-o"></i></div>
                            <input name="login" class="form-control" type="text" value="<?php echo $user->desLogin; ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $user->idUsuario; ?>">
                     <div class="form-group">
                        <label class=" form-control-label">Senha</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-key"></i></div>
                            <input name="senha" class="form-control" type="text" value="<?php echo $user->desSenha; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-light">Cancelar</button>
                        <button type="submit" class="btn btn-lg btn-success">Salvar alterações</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
 
   
</body>
</html>
