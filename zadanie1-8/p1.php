<?php
if(!isset($_REQUEST['date'])){
?>
<form action="main.php" method="GET" align="center">
<p>Узнайте Ваш прогноз гороскопа Вводите дату Вашего дня рождения в формате - '01.12'.</p>
<input type="text" name="date" placeholder="DD-MM"><br><br>
<input type="submit" name="submit" value="Узнать">
</form>
<?php
}
?>
<?php
if(isset($_REQUEST['submit']) && !empty($_REQUEST['date'])){
$date = explode('.', $_REQUEST['date']);
$day = $date[0];
$mounth = (int)$date[1];
$currentDay = date('d');
//Возвращает знак зодиака
function getSign($day, $mounth)
{
$startDate = [1=>20, 2=>19, 3=>21, 4=>21, 5=>21, 6=>22, 7=>23, 8=>23, 9=>23, 10=>24, 11=>23, 12=>22];
$signs = [1=>"Козерог","Водолей","Рыбы","Овен","Телец","Близнецы","Рак","Лев","Девы","Весы","Скорпион","Стрелец"];
if($mounth == 12 && $day > $startDate[$mounth]){
return $signs[1];
} else {
if($day > $startDate[$mounth]){
return $signs[$mounth+1];
} else {
return $signs[$mounth];
}
}
}
$sign = getSign($day, $mounth);
//Получаем прогноз
function getHoroscope($sign, $currentDay)
{

$horoscopes = [
"Козерог"=> [30=>'Трудный день',31=>'Пора действовать',1=>'Не бойся'],
"Водолей"=> [30=>'Рисковать',31=>'Слишком поздно',1=>'Попробуй отдохнуть'],
"Рыбы"=> [30=>'Забудь обо всем',31=>'Время улыбок',1=>'Позвони маме'],
"Овен"=> [29=>'Будь сильным',31=>'У тебя полно сил',1=>'Еще не время'],
"Телец"=> [29=>'В другой раз',31=>'Еще рано',1=>'Все очень просто'],
"Близнецы"=>[30=>'Трудный день',31=>'Пора действовать',1=>'Не трусь'],
"Рак"=> [30=>'Время рисковать',31=>'Слишком поздно',1=>'Попробуй отдохнуть'],
"Лев"=> [30=>'Забудь обо всем',31=>'Время улыбок',1=>'Позвони маме'],
"Девы"=> [30=>'Будь сильным',31=>'У тебя полно сил',1=>'Еще не время'],
"Весы"=> [30=>'В другой раз',31=>'Еще рано',1=>'Все очень просто'],
"Скорпион"=>[30=>'Трудный день',31=>'Пора действовать',1=>'Не трусь'],
"Стрелец"=> [30=>'Время рисковать',31=>'Слишком поздно',1=>'Попробуй отдохнуть'],
];
return $horoscopes[$sign][$currentDay];
}
echo 'Ваш знак зодиака - '.getSign($day, $mounth).'<br>';
echo 'Ваш прогноз на сегодня: '.getHoroscope($sign, $currentDay);
}
if(isset($_REQUEST['submit']) && empty($_REQUEST['date'])){

echo 'Введите дату Вашего дня рождения';
}
?>