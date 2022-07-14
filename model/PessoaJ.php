<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PessoaJ
 *
 * @author 182100534
 */
require_once './Pessoa.php';
class PessoaJ extends Pessoa{
    private $cnpj;
    private $inscEstadual;
    private $nomeFantasia;
    
    public function PessoaJ() {
        
    }
    public function getCnpj() {
        return $this->cnpj;
    }

    public function getInscEstadual() {
        return $this->inscEstadual;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function setInscEstadual($inscEstadual): void {
        $this->inscEstadual = $inscEstadual;
    }

    public function setNomeFantasia($nomeFantasia): void {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function __toString() {
        $pes = "Pessoa Jurídica: <br/>"
                . " - Nome: " . $this->getNome() . "<br/>"
                . " - Telefone: " . $this->getTelefone() . "<br/>"
                . " - E-mail: " . $this->getEmail() . "<br/>"
                . " - Endereço: " . $this->getEndereco() . "<br/>"
                . " - CNPJ: " . $this->getCnpj() . "<br/>"
                . " - Inscrição Estadual: " . $this->getInscEstadual() . "<br/>"
                . " - Nome Fantasia: " . $this->getNomeFantasia() . "<br/>"
                ;
        return $pes;
    }
}
