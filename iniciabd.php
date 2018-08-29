<?php
require_once('tabelacontatos.php');

   $sql = 'CREATE TABLE Contatos
   (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(255) NOT NULL UNIQUE,
            tel VARCHAR(50),
            email VARCHAR(255),
            datanasc DATE
   )';

   $bd->exec($sql);

   $bd->exec
   (
     "INSERT INTO Contatos(nome, tel, email, datanasc)
      VALUES('Ana', '+55 21 9999-9999', 'ana@ana.ana', '1987-02-09' ),
            ('Alan', '+1 874 5858-5858', 'al@an.alan', '1988-07-15' ),
            ('Anderson', '+77 245 7455-7589', 'ander@son.anderson', '2000-12-26' )"
    );

   echo "concluído";
?>
