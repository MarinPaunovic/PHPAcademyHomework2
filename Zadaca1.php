
<?php
$test=range("A","Z");
$i=0;
$ja="MARIN";
$ime=str_split($ja);
$c=4;
foreach($ime as $slovoi){
    foreach($test as $slovo){
        if($slovo===$ime[2] && $slovo===$ime[$c]){
            echo "<u><b>$slovo</u></b>";
                  continue;
  
    }
         if($slovo===$ime[$c]){
            echo "<u>$slovo</u>";
        }
         if($slovo===$slovoi){
        echo "<b>$slovo</b>";
        }
                if($slovo != $slovoi && $slovo != $ja[$c]){
            echo "$slovo";
        }
 
}
            $c--;
      echo "<br>";
}
?>
