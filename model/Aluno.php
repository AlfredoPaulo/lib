<?php

function cadastrarAluno($matricula, $cpf, $nome, $email, $logradouro, $numero, 
        $bairro, $cidade, $estado, $cep, $complemento){

    global $db;

    $count = 0;
  
    $query = "INSERT INTO aluno (matricula, cpf, nome, email, logradouro,
                    numero, bairro, cidade, estado, cep, complemento, status_aluno)
              VALUES (:matricula, :cpf, :nome, :email, :logradouro, :numero, 
                    :bairro, :cidade, :estado, :cep, :complemento, 1)";

    $statement = $db->prepare($query);

    $statement->bindValue(':matricula', $matricula);
    $statement->bindValue(':cpf', $cpf);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':logradouro', $logradouro);
    $statement->bindValue(':numero', $numero);
    $statement->bindValue(':bairro', $bairro);
    $statement->bindValue(':cidade', $cidade);
    $statement->bindValue(':estado', $estado);
    $statement->bindValue(':cep', $cep);
    $statement->bindValue(':complemento', $complemento);

    $count = $statement->execute();

    $dupesql = "SELECT * FROM aluno where (matricula = '$matricula')";
    $duperow = $db->query($dupesql);
    $dupecount = $duperow->rowCount();
    if ($dupecount == 0) {
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
    }

    $statement->closeCursor();
    return $count;
}

?>