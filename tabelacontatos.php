<?php
//Php Data Object - PDO
  function CriaConexãoBD()
  {
       $bd = new PDO('mysql:host=localhost;dbname=agendacontatos;charset=utf8',
                'AgendaContatos',
                'girassolpudim');

       $bd->setAttribute(PDO::ATTR_ERRMODE,
                          PDO::ERRMODE_EXCEPTION);

       return $bd;
  }


      function listaContatos()
      {
          $bd=CriaConexãoBD();

          $resultado=$bd->query('SELECT * FROM Contatos'); //PDOStatement

          return $resultado->fetchAll();
      }

?>
