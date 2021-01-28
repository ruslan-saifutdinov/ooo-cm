<?php
if(!empty($_POST['name']) and !empty($_POST['phone']) ){
    // ...

$name = trim(strip_tags($_POST['name']));
$phone = trim(strip_tags($_POST['phone']));

mail('ooo-cm@bk.ru', 'Callback', 'Вам написал: '.$name.'<br />Его номер: '.$phone,"Content-type:text/html;charset=utf-8");
header("Location: ${_SERVER['REQUEST_URI']}");
die;
}
?>