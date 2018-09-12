<?php
  function CriaConexãoBD()
  {
    $bd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8',
                  'Instagram',
                  'girassolpudim');

    $bd->setAttribute(PDO::ATTR_ERRMODE,
                      PDO::ERRMODE_EXCEPTION);

    return $bd;
  }


  ?>
