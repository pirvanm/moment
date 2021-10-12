<?php
​
// definition zone of data
$a =23;
$b =11;
​
// calculation 
$adunare = $a + $b;
$scadere = $a - $b;
$inmultire = $a * $b;
$impartire = $a / $b;

​
// as feeedback i suggestion make code more readeabile from :
$rezultat = "$a + $b =" . $adunare . "<br>".  "$a -$b =" . $scadere . "<br>".
"$a * $b =" . $inmultire ."<br>" . "$a / $b =" . $impartire;


// to : 

$mesajAdunare = "Rezultatul adunarii este: ".$adunare.'</br>';
$mesajScadere = "Rezultatul adunarii este: ".$adunare.'</br>';
$mesajInmultire = "Rezultatul adunarii este: ".$adunare.'</br>';
$mesajImparire = "Rezultatul adunarii este: ".$adunare.'</br>';

$rezultat = $mesajAdunare .$mesajScadere.$mesajInmultire.$mesajImparire
echo $rezultat;
?>