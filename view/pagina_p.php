<!-- <form action="." method="post">
    <input type="hidden" name="action" value="listarLivros">
    <input type="submit" value="listarLivros" />
</form>

<form action="." method="post">
    <input type="hidden" name="action" value="listarEmprestimos">
    <input type="submit" value="listar Emprestimos" />
</form> -->
<?php

<<<<<<< HEAD
//  include_once('../model/Usuario.php');

include("./config.php");
=======
  include '/lib/model/Usuario.php';
>>>>>>> df8852002188616715f77155ebd65b63a6f1c542

  $nivel = getNivel($_SESSION['usuario']);

?>

<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="/lib/view/styles/main.css">
  <meta charset="UTF-8">
</head>

<body>
  <header>

    <!-- Centered link -->
    <div class="centered">
      <a href="http://localhost/lib/view/formLog.php">Lib 3.11</a>
    </div>

    <!-- Left-aligned links (default) -->
    <img src="/lib/view/styles/icons-images/biblioteca-on-line.png" alt="Lib" height="40px">

    <!-- Right-aligned links -->
    <div class="right">
      <a href="/login.html">Sair</a>
    </div>
  </header>


  <div class="button-main">
    <?php
      if($nivel == 0){
    ?>
    <div class="button">
      <a href="/lib/view/admin.html" title="Biblioteca">
        <img src="/lib/view/styles/icons-images/administrator.png" alt="Biblioteca" width="64" height="64">
        <br>
        <p>Admin</p>
      </a>
    </div>
    <?php
      }
    ?>

    <!-- <div class="button">
      <a href="" title="Editar Cadastros">
        <img src="/lib/view/styles/icons-images/editar.png" alt="Editar Cadastros" width="64" height="64">
        <br>
        <p>Editar<br>Cadastros</p>
      </a>
    </div> -->

    <div class="button">
      <a href="/lib/view/aluno.html" title="Aluno">
        <img src="/lib/view/styles/icons-images/aluno.png" alt="Aluno" width="64" height="64">
        <br>
        <p>Aluno</p>
      </a>
    </div>

    <div class="button">
      <a href="/lib/view/livros.html" title="Livros">
        <img src="/lib/view/styles/icons-images/pilha-de-livros.png" alt="Livros" width="64" height="64">
        <br>
        <p>Livros</p>
      </a>
    </div>

    <div class="button">
      <a href="/lib/view/Emprestimo/formCadastrarEmprestimo.php" title="Empréstimo">
        <img src="/lib/view/styles/icons-images/tarefa.png" alt="Empréstimo" width="64" height="64">
        <br>
        <p>Empréstimo</p>
      </a>
    </div>

    <div class="button">
      <a href="" title="Devolução">
        <img src="/lib/view/styles/icons-images/devolucoes.png" alt="Devolução" width="64" height="64">
        <br>
        <p>Devolução</p>
      </a>
    </div>
  </div>

<<<<<<< HEAD
  <?php //include_once('./footer.php') ?>
=======
  <?php include 'footer.php';?>
>>>>>>> df8852002188616715f77155ebd65b63a6f1c542
</body>
