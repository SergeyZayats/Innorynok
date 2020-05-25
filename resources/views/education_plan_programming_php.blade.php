@include('layouts.navigation')
@include('layouts.education')

<h2 align='center'>План изучения курса</h2>
<h2 align='center' class="course_name">Основы PHP</h2>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		    <ol class="tree-structure">
			    <li>
	                <span class="num">0</span>
	                <a href="#">Что такое PHP? Зачем он нужен?. О языке PHP</a>
					<ol></ol>
	            </li>
	            <li>
	                <span class="num">1</span>
	                <a href="#">Технология передачи информации в Интернете</a>
	                <ol>
	                    <li>
	                        <span class="num">1.1</span>
	                        <a href="./php/Технология передачи информации в Интернете">Протоколы передачи данных. TCP/IP. Адресация в сети</a>      
				            <input type="checkbox" class="css-checkbox" id="checkbox1.1"/>
							<label for="checkbox1.1" name="checkbox1.1_lbl" class="css-label dark-check-green"></label>
						</li>
						<li>
	                        <span class="num">1.2</span>
	                        <a href="#">Клиент-сверверная архитектура. HTTP</a>
	                       	<input type="checkbox" class="css-checkbox" id="checkbox1.2"/>
							<label for="checkbox1.2" name="checkbox1.2_lbl" class="css-label dark-check-green"></label>
	                    </li>
	                    <li>
	                        <span class="num">1.3</span>
	                        <a href="#">GET и POST-запросы</a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox1.3"/>
							<label for="checkbox1.3" name="checkbox1.3_lbl" class="css-label dark-check-green"></label>
	                    </li>
	                </ol>
	             </li>
              	<li>
                 	<span class="num">2</span>
                	<a href="#">Установка/настройка веб-сервера и PHP </a>
                	<ol>
                    	<li>
                      		<span class="num">2.1</span>
                       		<a href="#">Установка и настройка веб-сервера и PHP. Готовые сборки веб-серверов </a>
	                       	<input type="checkbox" class="css-checkbox" id="checkbox2.1"/>
							<label for="checkbox2.1" name="checkbox2.1_lbl" class="css-label dark-check-green"></label>
                    	</li>
                    	<li>
                       		<span class="num">2.2</span>
                       		<a href="#">Первый скрипт на PHP </a>
	                       	<input type="checkbox" class="css-checkbox" id="checkbox2.2"/>
							<label for="checkbox2.2" name="checkbox2.2_lbl" class="css-label dark-check-green"></label>
                    	</li>
                	</ol>
              	</li>
              	<li>
                 	<span class="num">3</span>
                 	<a href="#">Основы языка</a>
                 	<ol>
		                <li>
		                    <span class="num">3.1</span>
		                    <a href="#">Базовый синтаксис</a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox3.1"/>
							<label for="checkbox3.1" name="checkbox3.1_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">3.2</span>
		                    <a href="#">Типы</a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox3.2"/>
							<label for="checkbox3.2" name="checkbox3.2_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">3.3</span>
		                    <a href="#">Переменные</a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox3.3"/>
							<label for="checkbox3.3" name="checkbox3.3_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">3.4</span>
		                    <a href="#">Константы</a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox3.4"/>
							<label for="checkbox3.4" name="checkbox3.4_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">3.5</span>
		                    <a href="#">Операторы</a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox3.5"/>
							<label for="checkbox3.5" name="checkbox3.5_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">3.6</span>
		                    <a href="#">Выражения и операции</a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox3.6"/>
							<label for="checkbox3.6" name="checkbox3.6_lbl" class="css-label dark-check-green"></label>
		                </li>
                 	</ol>
              	</li>
                <li>
                 	<span class="num">4</span>
                 	<a href="#">Управляющие конструкции</a>
                 	<ol>
		                <li>
		                    <span class="num">4.1</span>
		                    <a href="#">Условные блоки <i>if</i> / <i>elseif</i> / <i>else</i> </a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox4.1"/>
							<label for="checkbox4.1" name="checkbox4.1_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">4.2</span>
		                    <a href="#">Цикл <i>while</i> / <i>do-while</i> </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox4.2"/>
							<label for="checkbox4.2" name="checkbox4.2_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">4.3</span>
		                    <a href="#">Цикл <i>for</i> / <i>foreach</i> </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox4.3"/>
							<label for="checkbox4.3" name="checkbox4.3_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">4.4</span>
		                    <a href="#">Оператор <i>switch</i> </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox4.4"/>
							<label for="checkbox4.4" name="checkbox4.4_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">4.5</span>
		                    <a href="#">Конструкции <i>break</i> / <i>continue</i> </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox4.5"/>
							<label for="checkbox4.5" name="checkbox4.5_lbl" class="css-label dark-check-green"></label>
		                </li>
                 	</ol>
              	</li>
                <li>
                 	<span class="num">5</span>
                 	<a href="#">Функции и область видимости</a>
                 	<ol>
		                <li>
		                    <span class="num">5.1</span>
		                    <a href="#">Объявление и вызов функции </a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox5.1"/>
							<label for="checkbox5.1" name="checkbox5.1_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">5.2</span>
		                    <a href="#">Аргументы(параметры) функции </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox5.2"/>
							<label for="checkbox5.2" name="checkbox5.2_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">5.3</span>
		                    <a href="#">Возврат значений. Инструкция return </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox5.3"/>
							<label for="checkbox5.3" name="checkbox5.3_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">5.4</span>
		                    <a href="#">Анонимные функции и замыкания </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox5.4"/>
							<label for="checkbox5.4" name="checkbox5.4_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">5.5</span>
		                    <a href="#">Глобальные переменные. <i>$GLOBALS</i> </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox5.5"/>
							<label for="checkbox5.5" name="checkbox5.5_lbl" class="css-label dark-check-green"></label>
		                </li>
                 	</ol>
              	</li>
              	<li>
                 	<span class="num">6</span>
                 	<a href="#">Массивы</a>
                 	<ol>
		                <li>
		                    <span class="num">6.1</span>
		                    <a href="#">Создание массива </a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox6.1"/>
							<label for="checkbox6.1" name="checkbox6.1_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">6.2</span>
		                    <a href="#">Списки  </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox6.2"/>
							<label for="checkbox6.2" name="checkbox6.2_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">6.3</span>
		                    <a href="#">Ассоциативные массивы </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox6.3"/>
							<label for="checkbox6.3" name="checkbox6.3_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">6.4</span>
		                    <a href="#">Доступ к элементу массива </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox6.4"/>
							<label for="checkbox6.4" name="checkbox6.4_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">6.5</span>
		                    <a href="#">Перебор элементов массива </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox6.5"/>
							<label for="checkbox6.5" name="checkbox6.5_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">6.6</span>
		                    <a href="#">Слияние и разбиение строк в массивы </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox6.6"/>
							<label for="checkbox6.6" name="checkbox6.6_lbl" class="css-label dark-check-green"></label>
		                </li>
                 	</ol>
              	</li>
              	<li>
                 	<span class="num">7</span>
                 	<a href="#">Встроенные функции </a>
                 	<ol>
		                <li>
		                    <span class="num">7.1</span>
		                    <a href="#">Строковые функции </a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox7.1"/>
							<label for="checkbox7.1" name="checkbox7.1_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">7.2</span>
		                    <a href="#">Математические функции  </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox7.2"/>
							<label for="checkbox7.2" name="checkbox7.2_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">7.3</span>
		                    <a href="#">Функции для работы с массивами </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox7.3"/>
							<label for="checkbox7.3" name="checkbox7.3_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">7.4</span>
		                    <a href="#">Функции для работы с датой и временем </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox7.4"/>
							<label for="checkbox7.4" name="checkbox7.4_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">7.5</span>
		                    <a href="#">Функции для работы с файлами и папками </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox7.5"/>
							<label for="checkbox7.5" name="checkbox7.5_lbl" class="css-label dark-check-green"></label>
		                </li>
                 	</ol>
              	</li>
              	<li>
                 	<span class="num">8</span>
                 	<a href="#">Основы объектно-ориентированного программирования. Классы и объекты </a>
                 	<ol>
		                <li>
		                    <span class="num">8.1</span>
		                    <a href="#">Что такое класс и объект? </a>
	                        <input type="checkbox" class="css-checkbox" id="checkbox8.1"/>
							<label for="checkbox8.1" name="checkbox8.1_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">8.2</span>
		                    <a href="#">Определение класса, создание и удаление объекта. Конструктор и деструктор  </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox8.2"/>
							<label for="checkbox8.2" name="checkbox8.2_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">8.3</span>
		                    <a href="#">Свойства и методы класса </a>
		                   	<input type="checkbox" class="css-checkbox" id="checkbox8.3"/>
							<label for="checkbox8.3" name="checkbox8.3_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">8.4</span>
		                    <a href="#">Права доступа к свойствам и методам: <i>public</i>, <i>private</i>, <i>protected</i> </a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox8.4"/>
							<label for="checkbox8.4" name="checkbox7.4_lbl" class="css-label dark-check-green"></label>
		                </li>

		                <li>
		                    <span class="num">8.5</span>
		                    <a href="#">Статические свойства. Ключевое слово <i>static</i></a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox8.5"/>
							<label for="checkbox8.5" name="checkbox7.5_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">8.6</span>
		                    <a href="#">Ключевые слова <i>this</i> и <i>self</i></a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox8.5"/>
							<label for="checkbox8.5" name="checkbox7.5_lbl" class="css-label dark-check-green"></label>
		                </li>
		                <li>
		                    <span class="num">8.7</span>
		                    <a href="#">Перегрузка. Магические методы</a>
		                    <input type="checkbox" class="css-checkbox" id="checkbox8.5"/>
							<label for="checkbox8.5" name="checkbox7.5_lbl" class="css-label dark-check-green"></label>
		                </li>
                 	</ol>
              	</li>
           </ol>
		</div>
	</div>
</div>	