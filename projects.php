<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Проекты</title>
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
	<h2>ПРИСТРОЙКА К ЗДАНИЮ МБОУ СОШ №30 НА 400 МЕСТ
ПО АДРЕСУ: МОСКОВСКАЯ ОБЛАСТЬ, Г. БАЛАШИХА,
МКР. АВИАТОРОВ, УЛ.ЛЁТНАЯ, Д.7
	</h2>
	
	
	<div class="slider">
    <div class="slider__wrapper">
      <div class="slider__item">
        <div style="height: 500px; "><img src="img/school.jpg" height="500"></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src="img/school1.jpg" height="500"></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src="img/school2.jpg" height="500"></div>
      </div>
      <!--<div class="slider__item">
        <div style="height: 500px; "><img src="img/school3.jpg" height="500"></div>
      </div> -->
    </div>
    <a class="slider__control slider__control_left" href="#" role="button"></a>
    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
  </div>
  
  
  
  <script>
    'use strict';
    var multiItemSlider = (function () {
      return function (selector, config) {
        var
          _mainElement = document.querySelector(selector), // основный элемент блока
          _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
          _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
          _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
          _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
          _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
          _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
          _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента    
          _positionLeftItem = 0, // позиция левого активного элемента
          _transform = 0, // значение транфсофрмации .slider_wrapper
          _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
          _items = []; // массив элементов
        // наполнение массива _items
        _sliderItems.forEach(function (item, index) {
          _items.push({ item: item, position: index, transform: 0 });
        });

        var position = {
          getMin: 0,
          getMax: _items.length - 1,
        }

        var _transformItem = function (direction) {
          if (direction === 'right') {
            if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
              return;
            }
            if (!_sliderControlLeft.classList.contains('slider__control_show')) {
              _sliderControlLeft.classList.add('slider__control_show');
            }
            if (_sliderControlRight.classList.contains('slider__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
              _sliderControlRight.classList.remove('slider__control_show');
            }
            _positionLeftItem++;
            _transform -= _step;
          }
          if (direction === 'left') {
            if (_positionLeftItem <= position.getMin) {
              return;
            }
            if (!_sliderControlRight.classList.contains('slider__control_show')) {
              _sliderControlRight.classList.add('slider__control_show');
            }
            if (_sliderControlLeft.classList.contains('slider__control_show') && _positionLeftItem - 1 <= position.getMin) {
              _sliderControlLeft.classList.remove('slider__control_show');
            }
            _positionLeftItem--;
            _transform += _step;
          }
          _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
        }

        // обработчик события click для кнопок "назад" и "вперед"
        var _controlClick = function (e) {
          if (e.target.classList.contains('slider__control')) {
            e.preventDefault();
            var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
            _transformItem(direction);
          }
        };

        var _setUpListeners = function () {
          // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
          _sliderControls.forEach(function (item) {
            item.addEventListener('click', _controlClick);
          });
        }

        // инициализация
        _setUpListeners();

        return {
          right: function () { // метод right
            _transformItem('right');
          },
          left: function () { // метод left
            _transformItem('left');
          }
        }

      }
    }());

    var slider = multiItemSlider('.slider')

  </script>
	
	
	
	
	
	<h3 align="left"> Системы, реализованные ООО "СТРОЙМАСТЕР" на объекте: </h3>
	<ul class="list-left">
		<li> Локально-вычислительная сеть
		<li> Системы заземления и молниезащиты
		<li> Внутреннее и внешнее освещение
		<li> Внутреннее силовое обрудования
		<li> Телефонизация
		<li> Часофикация
		<li> Система видеонаблюдения
		<li> СКУД
	</ul>
	</p>
	</div>
	
	<footer class="page-footer">
      <div class="container">
	  <a class="footer-email" href="mailto:ooo-cm@bk.ru"><b>ooo-cm@bk.ru</b></a>
    <a class="footer-phone" href="tel:+79876543210"><b>+7 499 130 02 23</b></a>
	  </div>
    </footer>
  </body>
</html>