<?php

//main

require_once("config.php");

//carregando usuário pelo ID
//$root=new Usuario();
//$root->loadById(3);
//echo $root;*/

//**** LIST ****
//- uma forma de listar
//$sql = new Sql();
//$usuarios=$sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//- Listando através de um método static
//$lista=Usuario::getList();
//echo json_encode($lista);

//- carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//- carrega o usuário usando o login e senha
//$usuario=new Usuario();
//$usuario->login("root","1357");
//echo $usuario;

//**** INSERT ****
//$usuario = new Usuario("Romilde","f123u");
//$usuario->insert();
//echo $usuario;

//**** UPDATE ****
//$usuario = new Usuario();
//$usuario->loadById(7);
//$usuario->update("Paula","p4ul4");
//echo $usuario;

//**** DELETE ****
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;

?>