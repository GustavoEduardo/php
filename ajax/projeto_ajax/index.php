<!doctype html>
<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <meta name="author" content="Gilvan Oliveira Alves">
        <meta name="reply-to" content="gylloliver26@hotmail.com">
        <meta name="generator" content="Brackets 1.11">
        <title>Requisições Assíncronas</title>
        <script src="jquery.2.1.3.min.js"></script>
        <script>
            function postDados(){
                var nome = document.getElementById('nome').value;
                var login = document.getElementById('login').value;
                var senha = document.getElementById('senha').value;
           

            $.ajax
            ({
                //Configurações
                type: 'POST',//Método que está sendo utilizado.
                dataType: 'html',//É o tipo de dado que a página vai retornar.
                url: 'postdados.php',//Indica a página que está sendo solicitada.
                //função que vai ser executada assim que a requisição for enviada
                beforeSend: function () {
                    $("#resposta").html("<img src='load.gif' id='load'>");
                },
                //Dados para envio
                data: {nome: nome, login: login, senha: senha},
                //função que será executada quando a solicitação for finalizada.
                success: function (msg)
                {
                   $("#resposta").html(msg);
                }
            });

            }

             function getDados(){
                var login = document.getElementById('loginP').value;
            
           

            $.ajax
            ({
                //Configurações
                type: 'POST',
                dataType: 'html',
                url: 'getdados.php',
                beforeSend: function () {
                    $("#dados").html("<img src='load.gif' id='load'>");
                },
                //Dados para envio
                data: {login: login},
                //função que será executada quando a solicitação for finalizada.
                success: function (msg)
                {
                   $("#dados").html(msg);
                   console.log(mgs);
                }
            });

            }



        </script>
        
    </head>
    
    <body>

<!-- Formulário de Cadastro --> 
<form>
    <label>Nome</label>
    <input type="text" name="nome" id="nome" required="required">
    <label>Login</label>
    <input type="text" name="login" id="login" required="required">
    <label>senha</label>
    <input type="text" name="senha" id="senha" required="required">
    <input type="button" value="Cadastrar" onclick="postDados();">
</form>
        
<!-- Resposta do Cadastro --> 
<span id="resposta"></span>       

<br/>
        
<!-- Formulário de Pesquisa --> 
<form>
    <label>Pesquisa pelo Login</label>
    <input type="text" name="login" id="loginP" required="required">
    <input type="button" value="Pesquisar" onclick="getDados();">
</form>


        
<!-- Tabela de Registros --> 

<table >
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Login</th>
        <th>Senha</th>
    </thead>
    <tbody id="dados">
        
    </tbody>
    

</table>
  
        
        
    </body>
</html>