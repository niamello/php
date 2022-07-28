<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of deletarUser
 *
 * @author 182100534
 */

    if(isset($_POST['deletar'])){
            $id = (int)$_POST['idUsuario'];
            $pdo = require_once '../pdo/Connection.php';
            $sql = "delete from usuario where idUsuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $id, PDO::PARAM_INT);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header("location: ../view/listaUsuarios.php");
    }