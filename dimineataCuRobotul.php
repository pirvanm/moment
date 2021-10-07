<?php 

$oraCurenta = date('H');
// statice 
$oraCurenta = 21;
$minutulCurent = date('I');

//var_dump("minutul curent este:",$minutulCurent );
// afiseaza ora 
// folosind functia date , avem o valoare
// dinamia 
// intre ora 8-9 bem cafea


// 9 -11 lucram

// daca lucram ascultam muzica 

// daca este seara

if($minutulCurent <45)
{
 echo ' nu pot fuma ';
}

else {
    echo 'pot fuma';

}

if ($oraCurenta >= 17)
{
   // header('Location: http://www.foodpanda.ro');
   // echo 'ce as manca o pizzza';
}


if ($oraCurenta >= 21){
    header('Location: http://www.netflix.com');
}

else {
    echo 'nu stiu cat e ceasul';
}

/// 

?>