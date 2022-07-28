<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

 if(isset($_POST['salvar'])){
            $id = (int)$_POST['idUsuario'];
            $nomeUsuario = $_POST['nomeUsuario'];
            $perfilAcesso = $_POST['perfilAcesso'];
            $usuario = $_POST['usuario'];
            $pdo = require_once '../pdo/Connection.php';
            $sql = "update usuario set nomeUsuario = ?, perfilAcesso = ?, usuario = ? where idUsuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(4, $id, PDO::PARAM_INT);
            $sth->bindParam(1, $nomeUsuario, PDO::PARAM_STR);
            $sth->bindParam(2, $perfilAcesso, PDO::PARAM_STR);
            $sth->bindParam(3, $usuario, PDO::PARAM_STR);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header("location: ../view/listaUsuarios.php");
    }