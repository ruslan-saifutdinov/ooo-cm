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
		<h1> Наши Услуги </h1>
		
	<table align="center">
	<tr>
	<td style="vertical-align: top">
		<ul class="list-left"> 
			<li> <h3>Капитальный ремонт жилых многоэтажных домов</h3>
				<ul>
					<li> Ремонт (монтаж) систем электроснабжения
					<li> Ремонт (монтаж) подъездов
					<li> Ремонт (монтаж) фасадов, кровли
					<li> Ремонт (монтаж) систем ХГВС
				</ul>
		</ul>
	</td>
	<td style="vertical-align: top">
		<ul class="list-left">
			<li><h3> Монтаж под ключ (с пуско-наладкой)</h3>
				<ul>
					<li> Силовые линии, ВРУ
					<li> Системы Радиофикации 
					<li> Системы Часофикации
					<li> ЛВС
					<li> СКУД
					<li> Системы Видеонаблюдения
				</ul>
		
		</ul>
	</td>
	</tr>
	</table>	
	<div class="callback">
<h3 class="list-left"> Введите ваши контакы и мы перезвоним Вам: </h3>	
	<form method="post" action="callback.php">
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


<!-- Form from somewhere <div class="form-bottom-part">
	<div class="tpl-anketa" data-api-url="/my/s3/xapi/public/?method=form/postform&amp;param[form_id]=24665500&amp;ver_id=2614265&amp;param[tpl]=global:anketa.block.tpl&amp;param[custom_params]=custom=1||placeholdered_fields=1||button=1" data-api-type="form">
	<div class="title ">Обратный звонок</div><form data-s3-anketa-id="24665500" method="post" action="">
	<input type="hidden" name="form_id" value="24665500">
	<input type="hidden" name="tpl" value="global:anketa.block.tpl">
	<div><div class="tpl-field  type-text field-required  field-name">
	<div class="field-value input-name"><input required="" class="field-value--text-field" type="text" size="30" maxlength="100" value="" name="d[0]" placeholder="Имя *">
	</div>
	</div>
	<div class="tpl-field  type-text field-required  field-phone">
	<div class="field-value input-phone">
	<input required="" class="field-value--text-field" type="text" size="30" maxlength="100" value="" name="d[1]" placeholder="Телефон *">
	</div>
	</div>
	<div class="tpl-field  tpl-field-button">
	<button>Заказать</button>
	</div>
	<div class="tpl-field tpl-field-personal_bottom  type-checkbox field-required">
	<div class="field-value ">
	<ul><li><label>
	<input required="" type="checkbox" checked="checked" value="Да" name="d[2]">
	<span class="checkbox-button">
	</span> 
	<span class="field-required-mark">*
	</span> Я согласен на обработку моих <a href="/user?mode=agreement">персональных данных</a>
	</label>
	</li>
	</ul>
	</div>
	</div>
	</div>
	<textarea name="g-recaptcha-response" style="display: none !important;"></textarea>
	</form>
					<script>
					
						var $captcha = $('input[name=_cn]');
						if ($captcha.length) {
							$.getScript('//captcha.oml.ru/static/captcha.js?2', function() {
								var $d = $("[id^=s3_captcha_cn]");
								mgCaptcha.draw("/my/s3/captcha/get.php", ($d.length ? $d.get(0) : null));
							});
						}
						
						var inputMask = $('input[data-mask="mask"]'),
							isMobileCheck = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
						if (inputMask.length && typeof lp_template.phone_mask == 'function') {
							$.getScript('/g/s3/lp/js/mask.js', function() {
								lp_template.phone_mask.call($('input[data-mask="mask"]'));
							});
						}
						
						if (lp_template && !lp_template.initedCalendar) {
							var scriptElement = document.createElement('script'),
								date = new Date();
							scriptElement.src= '/g/s3/lp/lp_new/js/datepicker.js?' + date.getTime();
							document.querySelector('head').appendChild(scriptElement);
							lp_template.initedCalendar = true;
						}
					</script>
				</div></div>
	
	
	
	</div>
                </div>
		
	-->