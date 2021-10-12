<?php 
// putem avea un robot care face 
// ceva cat timp e activat 

 //$robotActivat = true;
 $robotActivat = false ;

$ingredientePizza  = [
    'carne', 
    'branza', 
    'ardei'
];

foreach($ingredientePizza as $ingredient )
{
    echo "<li>";
    echo $ingredient;
    echo "</li>";
}
#1 prima pagina 
// if($robotActivat == true ) {
//     header('Location: robotpage.php');
// }


// else {
//     echo 'pagina ta';
// }
?>