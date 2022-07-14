<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PessoaF
 *
 * @author Nia
 */

require_once './Pessoa.php';
class PessoaF extends Pessoa{
    private $cpf;
    private $rg;
    private $sexo;
    
    public function PessoaF(){
        
    }
    
    public function getCpf() {
        return $this->cpf;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setRg($rg): void {
        $this->rg = $rg;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    public function __toString() {
        $pes = "Pessoa Física: <br/>"
                . " - Nome: " . $this->getNome() . "<br/>"
                . " - Telefone: " . $this->getTelefone() . "<br/>"
                . " - E-mail: " . $this->getEmail() . "<br/>"
                . " - Endereço: " . $this->getEndereco() . "<br/>"
                . " - CPF: " . $this->getCpf() . "<br/>"
                . " - RG: " . $this->getRg() . "<br/>"
                . " - Sexo: " . $this->getSexo() . "<br/>"
                ;
        return $pes;
    }

}
