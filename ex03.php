<?php
for($id=0; $id<=100; $id++){
    $num[$id]=rand(001,100);
    if($id == 1){
        echo "Menor numero: $id<br>";
    }
    elseif($id ==100){
        echo "Maior numero: $id;<br>";
    }
}
print_r($num);
?>