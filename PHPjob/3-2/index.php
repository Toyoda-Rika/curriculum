<?php
//ファイルが書き込み可能なのか確認する
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    echo "writable!!";
} else {
    echo "not writable!";
    exit;
}
echo'<br>';

//ファイルに書き込みする
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    $fp = fopen($testFile, "a");
    fwrite($fp, $contents);
    fclose($fp);
    echo "finish writing!!";
} else {
    echo "not writable!";
    exit;
}
echo'<br>';

//ファイルの読み込み
$test_file = "test2.txt";
    
if (is_readable($test_file)) {
    $fp = fopen($test_file, "r");
    while ($line = fgets($fp)) {
        echo $line.'<br>';
    }
    fclose($fp);
} else {
    echo "not readable!";
    exit;
}

?>