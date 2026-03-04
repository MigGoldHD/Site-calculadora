<?php

$media = $_POST["media"];

echo "<h2>Resultado</h2>";

if ($media <= 1.7) {
    echo "Média: $media <br>";
    echo "Situação: Não poderá realizar o exame.";
}

elseif ($media >= 7.0) {
    echo "Média: $media <br>";
    echo "Situação: APROVADO!";
}

else {
    // Cálculo da Nota do Exame
    $nota_exame = 50 - (6 * $media) / 4;

    echo "Média: $media <br>";
    echo "O aluno deverá tirar <strong>" . number_format($nota_exame, 2, ',', '.') . "</strong> no exame para ser aprovado.";
}

?>