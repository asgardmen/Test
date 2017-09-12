<?php
session_start();
	if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['captcha']){
     if(empty($_POST['name']))  {
      echo '<br><font color="red">Поле имя должно быть заполнено!</font>';
} 
     elseif (!preg_match("/^\w{3,}$/", $_POST['name'])) {
      echo '<br><font color="red">У программистов своеобразный чёрный юмор, а юзабилити последнее о чём я думал! Эх!</font>';
}
     elseif(empty($_POST['phone'])) {
      echo '<br><font color="red">Я понятия не имею что я тут писал!</font>';
}
     elseif (!preg_match("/\A(\w){10,20}\Z/", $_POST['phone'])) {
      echo '<br><font color="red">10 цифр не меньше господа!</font>';
}
     elseif(empty($_POST['prise'])) {
      echo '<br><font color="red">Введите цену!</font>';
}
     elseif(empty($_POST['choiceradio'])) {
      echo '<br><font color="red">Выберите тип недвижимости!</font>';
}
    

     else{
$name = $_POST['name'];
$phone = $_POST['phone'];
if($_POST['choiceradio']=1){
$type = "Квартира";
}
if($_POST['choiceradio']=2){
$type = "Дом";
}
if($_POST['choiceradio']=3){
$type = "Земля";
}
if($_POST['choiceradio']=4){
$type = "Что-то";
}
if($_POST['choiceradio']=5){
$type = "Ничего";
}
$email = $_POST['email'];
$desk = $_POST['desk'];
$prise = $_POST['prise']; 
$fp = fopen('baza.txt', 'a+'); 
$zap = fwrite($fp, $name);
$zap = fwrite($fp, $phone);
$zap = fwrite($fp, $type);
$zap = fwrite($fp, $email);
$zap = fwrite($fp, $desk);
$zap = fwrite($fp, $prise);

echo '<font color="green">На главную!</font>';
}

}

	else{
		echo "Каптча введена неверно.";
	}



unset($_SESSION['captcha_keystring']);
?>