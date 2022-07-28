<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    //posteriormente iremos trabalhar com session
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();
    $listaUsuarios = $cadUsuario->getUsuario();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="lista">
            <h2>Lista Usuários</h2>            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuário</th>
                        <th>Usuário</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaUsuarios as $user): ?>
                    <tr>
                        <td><?php echo $user['idUsuario']; ?></td>
                        <td><?php echo $user['nomeUsuario']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php if($user['perfilAcesso'] == "admin"){echo "Administrador";} elseif ($user['perfilAcesso'] == "user"){ echo "Usuário"; } ?></td>
                        <td> 
                            <form action="editarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Editar" name="editar">
                            </form>
                            <form action="../controller/deletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Deletar" name="deletar">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br/>
            <input type="button" value="Voltar Lista" onclick="location.href='../view/cadUsuario.php'">
        </div>
    </body>
</html>
