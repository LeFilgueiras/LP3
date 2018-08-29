<?php
//Php Data Object - PDO

   $bd = new PDO('mysql:host=localhost;dbname=agendacontatos;charset=utf8',
            'AgendaContatos',
            'girassolpudim');

   $bd->setAttribute(PDO::ATTR_ERRMODE,
                      PDO::ERRMODE_EXCEPTION);

   $sql = 'CREATE TABLE Contatos(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(255) NOT NULL UNIQUE,
            tel VARCHAR(50),
            email VARCHAR(255),
            datanasc DATE
   )';

   $bd->exec($sql);

   $sql = 'INSERT INTO Contatos() VALUES()';

   echo "concluído";
?>
