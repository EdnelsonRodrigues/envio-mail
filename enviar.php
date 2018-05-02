<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="formulário de envio e recebimento de e-mails">
  <meta name="author" content="Ednelson Rodrigues - Analista de sistemas -">

  <title>Contato</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Custom css -->
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>

        <?php

        $nome = $_POST['nome'];
        $email = $_POST['email']; 
        $mensagem = $_POST['mensagem']; 

        $titulo = 'E-mail TESTE';
        $destino = 'edrodrigues.inf@gmail.com';

        mail($destino, $titulo, $mensagem, $nome, $email);

        ?>

  <div class="container envia">
      <div class="row">
        <div class="text-center alert alert-success form-control" role="alert">
        <h4 class="alert-heading">Perfeito!</h4>
        <p>Seu e-mail foi enviado com sucesso.
        Entraremos em contato assim que pudermos...</p>
        <hr>
            <p class="mb-0 text-center">Deseja enviar outra mensagem? <a style="text-decoration: none" href="index.html">Clique aqui!</a> </p>
        </div>
      </div>
  </div>
</body>
</html>
