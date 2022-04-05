<?php

    function login($usuario, $senha){
        global $db; 
        $count = 0;
    
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";

        $statement = $db->prepare($query);
        $statement->bindValue(':usuario', $usuario);
        $statement->bindValue(':senha', $senha);
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();

        return $count;
    }

    function deslogar(){
        session_destroy();
        header("Location:/libra/");
    }

?>