<!DOCTYPE html>

<html lang="pt-br">
<head>
 <meta charset="utf-8"/>
 <title>InstaCPII</title>
</head>
<body>

 <h1>InstaCPII</h1>

 <!-- TODO: Formulário de login -->

 <form method="POST" action="Controlador/Usuário/CadastroUsuario.php" novalidate>
   <input name="nome" type="text" placeholder="Nome" minlength=3 maxlength=12 required/>
   <input name="sobrenome" type="text" placeholder="Sobrenome"minlength=3 maxlength=12 required/><br/>

   <input name="email" type="email" placeholder="E-Mail" required /><br/>

   <input name="senha" type="password" placeholder="Senha" minlength=6 maxlength=12  required/><br/>

   <input name="confirmaSenha" type="password" placeholder="Confirmar senha" minlength=6 maxlength=12 required/><br/>

   <label>Data de nascimento: <input name="dataNasc" type="date" required/></label><br/>

   <label>
     Quem pode ver as suas publicações?
     <select name="visibilidadePublicações">
       <option value="" disabled>Selecione</option>
       <option value="1">Amigos</option>
       <option value="2">Amigos de amigos</option>
       <option value="3">Todos</option>
     </select>
   </label><br/>

   <label><input name="alertasEmail" type="checkbox" />Receber alertas por e-mail.</label><br/>

   <label><input name="aceitaTermos" type="checkbox" required />Li e concordo com os termos de uso e com a política de privacidade.</label><br/>

   <input type="submit" value="Cadastrar"/>
 </form>
</body>
</html>
