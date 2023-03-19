<link rel="stylesheet" href="style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$name = $_POST['my_name'];

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];



//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if($number1 == $answer1){
	$rs1 = "正解！";
}else{
	$rs1 = "残念・・・";
}

if($number2 == $answer2){
	$rs2 = "正解！";
}else{
	$rs2 = "残念・・・";
}

if($number3 == $answer3){
	$rs3 = "正解！";
}else{
	$rs3 = "残念・・・";
}

?>
<div class="class3">
<p><?php echo $name ?>さんの結果は・・・？</p><!--POST通信で送られてきた名前を表示-->
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $rs1; ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $rs2; ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $rs3; ?>
</div>