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

//https://stackoverflow.com/questions/1293896/php-array-printing-using-a-loop/17805906
// numar elemente , intreg
$numar = count($ingredientePizza);
for($i = 0; $i < sizeof($ingredientePizza); $i++)
{
    
// foreach($ingredientePizza as $ingredient )
// {
    echo "<li>";
   print($ingredientePizza[$i]);

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