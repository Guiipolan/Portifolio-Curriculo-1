<?php
include('conecta-bd.php');
// precisar ir no banco buscar os dados do curso a ser editados
// precisa saber qual é o curso que vai ser editado
// precisa enviar esses dados para um arquivo que faça a atualização deste curso no banco

if ( isset($_GET['id_curso'])) {
  $id_curso=$_GET['id_curso'];

  // agora podemos recuperar as informações deste registro no banco
  $sql = $conexao->prepare("SELECT * FROM cursos WHERE id_curso = $id_curso");
  $sql->execute();
  $curso = $sql->fetchAll();
// var_dump($curso);
  // fetchAll serve para pegar todos
  // agora podemos extrair as informacoes do curso de dentro da variavel $curso
  $nome = $curso[0]['nome'];
  $carga_horaria = $curso[0]['carga_horaria'];
  $instituicao = $curso[0]['instituicao'];
} else {
  header('location:listar-cursos.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>



<body>


  
  
  <div class="container">
    <h3>Editar Curso</h3>  
    <hr>

    <form action="inserir-curso.php" method="POST" class="form-inline">
      <input value="<?php echo $nome; ?>" size="50" type="text" name="nome" placeholder="nome do curso" required class="form-control" maxlength="50">

      <input value="<?php echo $carga_horaria; ?>" type="number" name="carga_horaria" placeholder="carga horária" required class="form-control" maxlength="3">

      <input value="<?php echo $instituicao; ?>" size="50" type="text" name="instituicao" placeholder="Instituição" required class="form-control" maxlength="50">

      <input type="hidden" name="id_curso" value="<?php echo $id_curso; ?>">

      <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i> ATUALIZAR</button>
      <!-- value faz com o que deixar o valor pre definido, o nome do curso, carga horaria e instituicao -->
    </form>

    <hr>
    <a href="listar-cursos.php" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR</a>   

  </div>

</body>

</html>






