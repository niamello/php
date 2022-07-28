<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$id = null;
if(isset($_POST['editar'])){
    $id = $_POST['idUsuario'];
}
require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
$user = $cadUsuario->getUsuarioById($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <h1>Editar Usuário</h1>
        <form action="../controller/updateUser.php" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo $user[0]['idUsuario']; ?>">
            <input type="text" name="nomeUsuario" value="<?php echo $user[0]['nomeUsuario']; ?>">
            <br/><br/>
            <select name="perfilAcesso">
                <option value="">Selecione...</option>
                <option value="admin"<?php if($user[0]['perfilAcesso'] == "admin"){echo "selected";} ?>>Administrador</option>
                <option value="user"<?php if($user[0]['perfilAcesso'] == "user"){echo "selected";} ?>>Usuário</option>
            </select>
            <br/><br/>
            <input type="text" name="usuario" value="<?php echo $user[0]['usuario']; ?>">
            <br/><br/>
            <input type="password" name="senha" minlength="8" placeholder="Senha aqui...">
            <br/><br/>
            <input type="submit" name="salvar" value="Salvar">
            <input type="button" value="Voltar" onclick="location.href='listaUsuarios.php'">
        </form>
    </body>
</html>
