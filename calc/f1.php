<?php
header('Context-Type: text/html; charset=utf-8');
$a = $_POST['ch1'];
$b = $_POST['ch2'];
$d = $_POST['deist'];
$c = 0;
if ($d =='+') {$c = $a+$b;}
else if ($d=='-') {$c = $a-$b;}
else if ($d=='*') {$c = $a*$b;}
else if ($d=='/') {$c = $a/$b;}
else {'Неверная операция';}
echo $a, ' ', $d, ' ', $b, '=', $c;
?>
