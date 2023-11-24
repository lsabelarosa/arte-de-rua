<?php
require_once 'usuarios.php';
$u = new User;
if (isset($_POST['usuario'])){
$user = addslashes($_POST['usuario']);
$passwd = addslashes($_POST['senha']);
if (!empty($user) && !empty($senha)){
$u->conectar("nomeDB", "localhost", "user", "password");
if ($u->msgErro == ""){
if (!$u->logar($user, $passwd)){
echo "Credenciais incorretas!";
}
} else{
echo "Erro: " . $u->msgErro;
}
} else{
echo "Preencha todos os campos obrigatórios!";
}
}
?>