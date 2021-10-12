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


// numar elemente , intreg
$numar = count($ingredientePizza);
for($i = 1; $i <= 10; $i++)
{
// foreach($ingredientePizza as $ingredient )
// {
    echo "<li>";
   print_r($ingredientePizza);
    echo "</li>";
// }
}
#1 prima pagina 
// if($robotActivat == true ) {
//     header('Location: robotpage.php');
// }


// else {
//     echo 'pagina ta';
// }
?>