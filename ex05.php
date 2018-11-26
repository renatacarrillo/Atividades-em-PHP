<?php
if(isset($_POST['enviar']));
    $nota01 = $_POST['nota01'];
    $nota02 = $_POST['nota02'];
    $nota03 = $_POST['nota03'];
    $nota04 = $_POST['nota04'];

$media = ($nota01 + $nota02 + $nota03 + $nota04) / 4;

echo "Suas notas foram: <br>". $nota01 . "<br>". $nota02 . "<br>". $nota03 . "<br>". $nota04 . "<br>Sua media final: <br>". $media;

    if ($media >=6);
        echo "Aluno Aprovado!";
    if ($media < 6){
        echo "Aluno Reprovado!";
    }
?>