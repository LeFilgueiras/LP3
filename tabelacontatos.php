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

      function InsereUsuário($dadosNovoContato)
      {
        $bd = CriaConexãoBD();

        $sql->$bd->prepare
          ("INSERT INTO contatos (nome, tel, email, dataNasc) VALUES (:valnome, :valtel, :valemail, :valdataNasc);");

        $sql->bindValue(':valnome', $dadosNovoContato['nome']);
        $sql->bindValue(':valtel', $dadosNovoContato['tel']);
        $sql->bindValue(':valemail', $dadosNovoContato['email']);
        $sql->bindValue(':valdataNasc', $dadosNovoContato['dataNasc']);

        $sql->execute();
      }
?>
