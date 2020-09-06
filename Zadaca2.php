   
<?php
$j=0;
$i=0;
$test=range("A","Z");
$startBolda=$endBolda=(count($test)/2)-1;//Za pomicanje bolda od 13[12] do 0 i obrnuto
foreach($test as $indexi => $slovoi){
    foreach($test as $indexj => $slovoj){
        $trenutnoslovo = $test[($i+$j) % count($test)];
        if($indexj == $endBolda){ //ako je indexj jednak polozaju 13[12] boldaj slovo
            echo "<b>" . $trenutnoslovo . "</b>";
        } else echo $test[($indexi+$indexj) % count($test)];
        $i++;
    }

    echo"<br>";


if($j<$startBolda){
    $endBolda--; //bold od 12 do 0
}else $endBolda++; //bold od 0 do 12

    $j++;
}
//[0] odnosno "A"
//[1] odnosno "B"
//[2] odnosno "C"
//[3] odnosno "D"
//[4] odnosno "E"
//[5] odnosno "F"
//[6] odnosno "G"
//[7] odnosno "H"
//[8] odnosno "I"
//[9] odnosno "J"
//[10] odnosno "K"
//[11] odnosno "L"
//[12] odnosno "M"
//[13] odnosno "N"
//[14] odnosno "O"
//[15] odnosno "P"
//[16] odnosno "Q"
//[17] odnosno "R"
//[18] odnosno "S"
//[19] odnosno "T"
//[20] odnosno "U"
//[21] odnosno "V"
//[22] odnosno "W"
//[23] odnosno "X"
//[24] odnosno "Y"
//[25] odnosno "Z"
