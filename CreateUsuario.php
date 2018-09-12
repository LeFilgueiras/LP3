<?php
require_once('ConexaoBd.php');
$bd = CriaConexãoBD();

$sql = 'CREATE TABLE Usuário
(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  sobrenome VARCHAR(50),
  email VARCHAR(255),
  senha VARCHAR(50),
  dataNasc DATE,
  visibilidadePublicações VARCHAR(1),
  alertasEmail BOOLEAN
 )';

$bd->exec($sql);

?>
