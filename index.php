<?php 
// putem avea un robot care face 
// ceva cat timp e activat 

 //$robotActivat = true;
 $robotActivat = false ;

if($robotActivat == true ) {
    header('Location: robotpage.php');
}


else {
    echo 'pagina ta';
}
?>