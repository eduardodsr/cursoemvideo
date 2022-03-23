<?php

abstract class Pessoa
{
    // Atritube
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    // Method Construct
    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    // Method
    protected function ganharExp() {
        $this->experiencia += 1;
    }

    // Special Methods, Getters and Setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    public function getExperiencia(): int
    {
        return $this->experiencia;
    }

    public function setExperiencia(int $experiencia): void
    {
        $this->experiencia = $experiencia;
    }

}