<?php
$numero=array("1","2","3","4","5","6","7","8","9","10");
$idNovo=0;
for($id=9; $id>=0; $id--){
    $numB[$idNovo]=$numero[$id];
    $idNovo++;
}
echo"<hr>";
print_r($numB);
?>