<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author Nia
 */
class Pessoa {
    private $idPessoa;
    private $nome;
    private $telefone;
    private $email;
    private $endereco;
    
    public function Pessoa() {
        
    }
    public function getIdPessoa() {
        return $this->idPessoa;
    }
        
    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setIdPessoa($idPessoa): void {
        $this->idPessoa = $idPessoa;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

}
