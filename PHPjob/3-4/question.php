<link rel="stylesheet" href="style.css">  

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$number1 = ["80","22","20","21"];
$number2 = ["PHP","Python","JAVA","HTML"];
$number3 = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $number1[0];
$answer2 = $number2[3];
$answer3 = $number3[1];
?>

<div class="class2">

<p>お疲れ様です<?php echo $name ?>さん</p><!--POST通信で送られてきた名前を出力-->
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
    
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($number1 as $value){ ?>   
<input type="radio" name="number1" value="<?php echo $value; ?>"><?php echo $value; ?>
<?php } ?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($number2 as $value){ ?>   
<input type="radio" name="number2" value="<?php echo $value; ?>"><?php echo $value; ?>
<?php } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($number3 as $value){ ?>   
<input type="radio" name="number3" value="<?php echo $value; ?>"><?php echo $value; ?>
<?php } ?><br>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $name ?>">
<input type="hidden" name="answer1" value="<?php echo $answer1 ?>">
<input type="hidden" name="answer2" value="<?php echo $answer2 ?>">
<input type="hidden" name="answer3" value="<?php echo $answer3 ?>">
<input type="submit" value="回答する" class="button" />

</form>
</div>