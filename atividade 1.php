<?php

// Classe base
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function calcularBonus() {
        return $this->salario * 0.10; // 10% do salário
    }
}

// Classe filha Gerente
class Gerente extends Funcionario {
}

// Classe filha Desenvolvedor
class Desenvolvedor extends Funcionario {
}

// Instanciando objetos
$gerente = new Gerente("João", 20000);
$desenvolvedor = new Desenvolvedor("Maria", 8000);

// Exibindo dados do gerente
echo "Nome: " . $gerente->getNome() . "<br>";
echo "Cargo: Gerente<br>";
echo "Salário: R$ " . number_format($gerente->getSalario(), 2, ',', '.') . "<br>";
echo "Bônus: R$ " . number_format($gerente->calcularBonus(), 2, ',', '.') . "<br><br>";

// Exibindo dados do desenvolvedor
echo "Nome: " . $desenvolvedor->getNome() . "<br>";
echo "Cargo: Desenvolvedor<br>";
echo "Salário: R$ " . number_format($desenvolvedor->getSalario(), 2, ',', '.') . "<br>";
echo "Bônus: R$ " . number_format($desenvolvedor->calcularBonus(), 2, ',', '.') . "<br>";

?>