<?php

  $erros = [];

  if(empty($_REQUEST) == false){

    $request = array_map('trim', $_REQUEST);

    $request = filter_var_array(
      $request,
      [
        'senha' => FILTER_DEFAULT,
        'confirmaSenha' => FILTER_DEFAULT,
        'nome' => FILTER_DEFAULT,
        'sobrenome' => FILTER_DEFAULT,
        'email' => FILTER_VALIDATE_EMAIL,
        'dataNasc' => FILTER_DEFAULT
      ]
    );

    $senha = $request['senha'];
    if ($senha == false)
    {$erros[] = "A senha informada não é valida.";}
    else if (strlen($senha) < 6 || strlen($senha) > 12)
    {$erros[] = "A senha informada não é valida.";}
    else
    {$erros[] = "Senha corfimada com sucesso.";}

    $confirmaSenha= $request['confirmaSenha'];
    if ($confirmaSenha == false)
    {$erros[] = "A senha informada não é valida.";}
    else if ($confirmaSenha!=$senha)
    {$erros[] = "A senha informada não é valida.";}
    else
    {$erros[] = "Senha corfimada com sucesso.";}

    $nome= $request['nome'];
    if ($nome == false)
    {$erros[] = "O nome informado não é valido.";}
    else if (strlen($nome) < 3 || strlen($nome) > 12)
    {$erros[] = "O nome informado não é valido.";}

    $sobrenome= $request['sobrenome'];
    if ($sobrenome == false)
    {$erros[] = "O sobrenome informado não é valido.";}
    else if (strlen($sobrenome) < 3 || strlen($sobrenome) > 12)
    {$erros[] = "O sobrenome informado não é valido.";}

    $email= $request['email'];
    if ($email == false)
    {$erros[] = "O email informado não é valido.";}

    $dia= $request['dataNasc'];
    $dataNasc = DateTime::createFromFormat ('Y-m-d', $dia);
    if ($dataNasc == false)
    {$erros[] = "A data de nascimento informada não é valida.";}
    else{
    $hoje = new DateTime();
    $diferença = $dataNasc->diff($hoje);
    $anosCorridos = $diferença->y;
    if ($anosCorridos<16)
    {$erros[] = "É preciso ter 16 anos ou mais para usar esta rede social";}}
  }

  foreach ($erros as $x) {
    echo "Uma ameaça foi detectada: $x <br/>";
  }

 ?>
