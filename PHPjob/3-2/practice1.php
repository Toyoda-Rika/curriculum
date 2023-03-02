<?php
$fruits=["りんご"=>"100","みかん"=>"50","もも"=>"300"]; 
$num=[3,3,10];
$i=0;

function pay($value,$num) {
      $total = $value * $num;
      return $total; 
}

foreach($fruits as $key=>$value){
      $total = pay($value,$num[$i]);
      echo $key.'は'.$total. '円です。<br>';
      $i ++ ;
}

?>