<?php

// Classe base
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Bônus padrão
    public function calcularBonus() {
        return $this->salario * 0.10;
    }

    // Método reutilizado pelas classes filhas
    public function exibirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . get_class($this) . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
        echo "Bônus: R$ " . number_format($this->calcularBonus(), 2, ',', '.') . "<br><br>";
    }
}

// Classe Gerente
class Gerente extends Funcionario {

    // Sobrescrita do método
    public function calcularBonus() {
        return $this->salario * 0.20; // 20%
    }
}

// Classe Desenvolvedor
class Desenvolvedor extends Funcionario {

    // Sobrescrita do método
    public function calcularBonus() {
        return $this->salario * 0.15; // 15%
    }
}

// Instanciando objetos
$gerente = new Gerente("João", 10000);
$desenvolvedor = new Desenvolvedor("Maria", 8000);

// Exibindo dados
$gerente->exibirDados();
$desenvolvedor->exibirDados();

?>