<?php
$fruits=["りんご"=>"100","みかん"=>"50","もも"=>"300"]; 

function pay($count, $value) {
      $total = $count * $value;
      return $total; 
}
pay(3,100);
pay(3,50);
pay(10,300);
    
foreach($fruits as $key=>$value){
      print $key.'は'.$total. '円です。';
      echo '<br>';
}

?>