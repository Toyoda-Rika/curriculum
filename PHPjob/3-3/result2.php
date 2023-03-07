<?php
$number = $_POST['number'];

$num = mt_rand(0,9);
?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $num; ?></p>
<p><?php 

if ($num==0){
    $result = "凶";
}elseif($num>=1 && $num<=3){
    $result = "小吉";
}elseif($num>=4 && $num<=6){
    $result = "中吉";
}elseif($num==7 && $num==8){
    $result = "吉";
}else{
    $result = "大吉";
}

echo $result; ?></p>

