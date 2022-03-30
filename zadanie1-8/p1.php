 <?php
if(isset($_REQUEST['submit']) && !empty($_REQUEST['text'])){
$text = $_REQUEST['text'];
$length = mb_strlen($text,'UTF-8');
$arr = [];
for($i=0;$i < $length;$i++){
$char = mb_substr($text,$i,1,'UTF-8');
if(!isset($arr[$char])){
$arr[$char] = 1;
} else{
$arr[$char]++;
}
}
foreach($arr as $key=>$elem){
$percent = round($elem * 100 / $length, 0);
echo "Процентное содержание '$key'".' в тексте - '.$percent.'%<br>';
}
}
if(isset($_REQUEST['submit']) && empty($_REQUEST['text'])){
echo 'Введите текст в   форму';
}
?>