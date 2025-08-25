
<?php
// *
// **
// ***
// ****
// *****
$n = 5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "\n";
}



// *
// **
// ***
// ****
// *****
// shorthand for loop
$n = 5;
for($i=1;$i<=$n;$i++){
    echo str_repeat('*',$i).PHP_EOL;
}
?>
<?php
// *****
// ****
// ***
// **
// *
$n = 5;
for($i=1;$i<=$n;$i++){
    for($j=$n;$j>=$i;$j--){
        echo "*";
    }
    echo "\n";
}

$n = 5;
for($i=$n;$i>=1;$i--){
    echo str_repeat('*',$i).PHP_EOL;
}

?>


<?php
//     *
//    **
//   ***
//  ****
// *****
$n = 5;
for($i=1;$i<=$n;$i++){
    echo str_repeat(' ',$n-$i).str_repeat('*',$i).PHP_EOL;
}

?>


<?php
// *****
//  ****
//   ***
//    **
//     *

$n = 5;
for($i=$n;$i>=1;$i--){
    echo str_repeat(' ',$n-$i).str_repeat('*',$i).PHP_EOL;
}

?>


<?php
//     *
//    ***
//   *****
//  *******
// *********
$n = 5;
for($i=1;$i<=$n;$i++){
    $star = 2*$i - 1;
    echo str_repeat(' ',$n-$i).str_repeat('*',$star).PHP_EOL;
}

?>

<?php
//     *
//    ***
//   *****
//  *******
// *********
// *********
//  *******
//   *****
//    ***
//     *
$n = 5;
for($i=1;$i<=$n;$i++){
    $star = 2*$i-1;
    echo str_repeat(' ',$n-$i).str_repeat('*',$star).PHP_EOL;
}
for($i=$n;$i>=1;$i--){
    $star = 2*$i-1;
    echo str_repeat(' ',$n-$i).str_repeat('*',$star).PHP_EOL;
}

?>


<?php

// *****
// *   *
// *   *
// *   *
// *****


$n = 5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n;$j++){
        if($i == 1 || $i == $n ||$j == 1 || $j == $n){
            echo '*';
        }else{
            echo ' ';
        }
    }
    echo PHP_EOL;
}

?>


<?php
//       *       *
//      **       *
//     ***       *
//    ****eeeeeee*
//     ***       *
//      **       *
//       *       *

$n = 7;
$mid = ceil($n/2);
for($i =1 ;$i<=$mid;$i++){
    echo str_repeat(' ',$n-$i).str_repeat('*',$i);
    if($i == $mid){
        echo str_repeat('e',$n);
    }else{
        echo str_repeat(' ',$n);
    }
    echo '*'.PHP_EOL;
}

for($i =$mid-1 ;$i>=1;$i--){
    echo str_repeat(' ',$n-$i).str_repeat('*',$i);
    if($i == $mid){
        echo str_repeat('e',$n);
    }else{
        echo str_repeat(' ',$n);
    }
    echo '*'.PHP_EOL;
}


?>

<?php


// *   *
//  * * 
//   *  
//  * * 
// *   *
$n = 5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n;$j++){
        if($j == $i || $j == ($n-$i+1)){
            echo '*';
        }else{
        echo ' ';
        }
    }
    echo PHP_EOL;
}


?>

<?php

//   *  
//   *  
// *****
//   *  
//   *  
$n = 5;
$mid = ceil($n/2);
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n;$j++){
        if($j == $mid || $i == $mid){
            echo '*';
        }else{
        echo ' ';
        }
    }
    echo PHP_EOL;
}


?>

<?php


//     *
//    * *
//   *   *
//  *     *
// *       *
//  *     *
//   *   *
//    * *
//     *

$n = 5;
$mid = ceil($n/2);
for($i=1;$i<=$n;$i++){
    if($i==1){
        echo str_repeat(' ',$n-$i).'*'.PHP_EOL;
    }else{
        
    echo str_repeat(' ',$n-$i).'*'.str_repeat(' ',2*$i-3).'*'.PHP_EOL;
    }
}
for($i=$n-1;$i>=1;$i--){
    if($i==1){
        echo str_repeat(' ',$n-$i).'*'.PHP_EOL;
    }else{
        
    echo str_repeat(' ',$n-$i).'*'.str_repeat(' ',2*$i-3).'*'.PHP_EOL;
    }
}


?>