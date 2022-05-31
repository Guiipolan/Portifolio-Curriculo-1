<?php
include('conecta-bd.php');

// primeiro validaos se as variaveis esperadas foram enviadas
// usamos o comando isst que testa se uma variavel fopi recebida

if (isset($_POST['nome']) && isset($_POST['carga_horaria']) && isset($_POST['instituicao']) ) {

// se tudo ocorreu bemcpodemos seguir com a insercao do novo registro

$nome = $_POST['nome'];
$carga_horaria = $_POST['carga_horaria'];
$instituicao = $_POST['instituicao'];

// chamadas para o banco 

$sql = $conexao->prepare("INSERT INTO cursos (nome, carga_horaria, instituicao) VALUES ('$nome', '$carga_horaria', '$instituicao')");
$sql->execute();

}
// agopra iremos recirecionar o usuario para a tela de listagem
//NAO SE PREOCUPE COM ISSO EH SO COLOCAR REDIRECIONAMENTO NO GOOGLE CADA COMANDO TEM O SEU
header('location:listar-cursos.php');

?>