<?php
session_start();
	if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['captcha']){
     if(empty($_POST['name']))  {
      echo '<br><font color="red">���� ��� ������ ���� ���������!</font>';
} 
     elseif (!preg_match("/^\w{3,}$/", $_POST['name'])) {
      echo '<br><font color="red">� ������������� ������������ ������ ����, � ��������� ��������� � ��� � �����! ��!</font>';
}
     elseif(empty($_POST['phone'])) {
      echo '<br><font color="red">� ������� �� ���� ��� � ��� �����!</font>';
}
     elseif (!preg_match("/\A(\w){10,20}\Z/", $_POST['phone'])) {
      echo '<br><font color="red">10 ���� �� ������ �������!</font>';
}
     elseif(empty($_POST['prise'])) {
      echo '<br><font color="red">������� ����!</font>';
}
     elseif(empty($_POST['choiceradio'])) {
      echo '<br><font color="red">�������� ��� ������������!</font>';
}
    

     else{
$name = $_POST['name'];
$phone = $_POST['phone'];
if($_POST['choiceradio']=1){
$type = "��������";
}
if($_POST['choiceradio']=2){
$type = "���";
}
if($_POST['choiceradio']=3){
$type = "�����";
}
if($_POST['choiceradio']=4){
$type = "���-��";
}
if($_POST['choiceradio']=5){
$type = "������";
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

echo '<font color="green">�� �������!</font>';
}

}

	else{
		echo "������ ������� �������.";
	}



unset($_SESSION['captcha_keystring']);
?>