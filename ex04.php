<?php
$num=array();
for($i = 0; $i < 100; $i++){ 
    $num[$i] = rand(1, 100);

}
    $soma = 0;
        for($i = 0; $i < 10; $i++){
            $soma = $soma+$num[$i];
}

        for($i = 0; $i < 10; $i++){
            echo "A[".($i+1)."] = ".$num[$i]. "<br>";
}
        echo "<br>Soma: ".$soma;
        echo "<br>Media: ".$soma/100;
?>