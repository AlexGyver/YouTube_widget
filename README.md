# Счётчик подписок YouTube v. 2.0

## Папки

**Library** - библиотека для модуля и дисплея, установить в C:\Program Files\Arduino\libraries
  
**subs_counter_v_2.0** - вторая версия системы (файл прошивки)

##  Материалы и компоненты
Всё указанное ниже можно найти здесь
http://alexgyver.ru/arduino_shop/  
* ESP8266 http://ali.pub/1dknzs
* LCD 1602 I2C http://ali.pub/1dko5f
* Понижайка http://ali.pub/1dko9i
* RGB LED http://ali.pub/1dkoin
* Фоторезистор http://ali.pub/1dkp9v

Резисторы  
https://www.chipdip.ru/catalog/rezistory  
* 270 Ом - 1 шт.
* 220 Ом - 1 шт.
* 120 Ом - 1 шт.
* 50 Ом - 1 шт.
* 47 кОм - 1 шт.
* 10 кОм - 5 шт.
* Паяльники, текстолит, припой  
http://alexgyver.ru/all-for-soldering/

## Вам также пригодится 
* Всё для пайки http://alexgyver.ru/all-for-soldering/
* Электронные компоненты http://alexgyver.ru/electronics/

## Печатная плата (PDF)
![PCB](https://github.com/AlexGyver/YouTube_widget/blob/master/Scheme%2C%20drawings/pcb_last_print.pdf)

## Корпус (PDF)
![BODY](https://github.com/AlexGyver/YouTube_widget/blob/master/Scheme%2C%20drawings/Drawings.pdf)

## Информация
Как установить Arduino IDE есть тут http://alexgyver.ru/arduino-first/  
Для работы с ESP нужно установить ядро в Arduino IDE, вся инфа тут https://esp8266.ru/arduino-ide-esp8266/ или тут https://geektimes.ru/post/271754/  
Настройки Arduino IDE  
![SETTINGS](https://github.com/AlexGyver/YouTube_widget/blob/master/Scheme%2C%20drawings/settings.jpg)


## HOW TO
const char* ssid = "LOGIN";           // имя wifi роутера / точки доступа  
const char* password = "PASSWORD";    // пароль wifi роутера / точки доступа  
String channel_ID = "ID";             // ID канала (копировать из строки адреса канала)  
String API_key = "KEY";               // API ключ аккаунта канала (как получить: https://www.slickremix.com/docs/get-api-key-for-youtube/ )  
int max_gain = 180;   // число подписок в час, при котором цвет станет красным  