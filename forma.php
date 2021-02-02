<?php
if($_POST['check']=='fd13vv'){
    include 'callback.php';
if(isset($_COOKIE['mail'])){
    $thanks = '<p align="center" style="color:green;font-size:26px">Спасибо за Ваше обращение!</p>';
    setcookie('mail', "", time() - 3600);

}
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Услуги</title>
  </head>

  <body>
  <header class="page-header">
		<div class="container">
		<a class="header-email" href="mailto:ooo-cm@bk.ru">ooo-cm@bk.ru</a>
		<a class="header-phone" href="tel:+74991300223">+7 499 130 02 23</a>
		</div>
    </header>
	
    <nav class="navigation">
	<table align="center" class="headtable">
	<tr>
	<td id="td1">
	 <img class="logo-cm" src="files/logo.png" alt="Строймастер логотип"> 
	</td>
	 <td>
		<a href="index.php"> Главная </a>
	
		<a href="contacts.php"> Контакты </a>
	
		<a href="projects.php"> Проекты </a>
	
		<a href="sales.php"> Продажа </a>
	
		<a href="services.php"> Услуги </a>
	 </td>
	 </tr>
	 </table>
	</nav>
	
	<div class="main">
		<h1><?php
if(!empty($thanks)){
    echo $thanks;
}
?>
 ООО СТРОЙМАСТЕР </h1>
		
	
	<div class="callback">
<h3 class="list-left"> Введите ваши контакы и мы перезвоним Вам: </h3>	
	<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
    Имя: <input required="required" maxlength="30" type="text" name="name" />
    <p>Телефон: <input required="required" maxlength="30" type="text" name="phone" /></p>
        <input type="hidden" name="check" value="fd13vv" />
    <input type="submit" value="Отправить!" />
</form>
	</div>
	</div>
	
	<footer class="page-footer">
      <div class="container">
	  <a class="footer-email" href="mailto:ooo-cm@bk.ru"><b>ooo-cm@bk.ru</b></a>
    <a class="footer-phone" href="tel:+79876543210"><b>+7 499 130 02 23</b></a>
	  </div>
    </footer>
  </body>
</html>