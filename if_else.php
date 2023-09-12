<?php
$nome = "Joao";
$idade = 16;
$numberOfPeoples = 1;

if($idade >= 18 || ($idade >= 16 && $numberOfPeoples <= 3)) {
    echo ("Voce tem $idade e o numero de pessoas é $numberOfPeoples. Pode entrar". PHP_EOL);
} else {
    echo "Você tem apenas $idade idade, não pode entrar". PHP_EOL;
}
