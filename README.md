# Счётчик подписок YouTube v. 2.0

## Папки

**Library** - библиотека для модуля и дисплея, установить в C:\Program Files\Arduino\libraries
  
**subs_counter_v_2.0** - вторая версия системы (файл прошивки)

## Вам также пригодится 
* Всё для пайки http://alexgyver.ru/all-for-soldering/
* Электронные компоненты http://alexgyver.ru/electronics/

## Печатная плата (PDF)
![PCB](https://github.com/AlexGyver/YouTube_widget/blob/master/Scheme%2C%20drawings/pcb_last_print.pdf)

## Корпус (PDF)
![BODY](https://github.com/AlexGyver/YouTube_widget/blob/master/Scheme%2C%20drawings/Drawings.pdf)

## Информация
Проект в EasyEDA https://goo.gl/rsDe4o  
Как установить Arduino IDE есть тут http://alexgyver.ru/arduino-first/  
Для работы с ESP нужно установить ядро в Arduino IDE, вся инфа тут https://geektimes.ru/post/271754/  
Настройки Arduino IDE  
![SETTINGS](https://github.com/AlexGyver/YouTube_widget/blob/master/Scheme%2C%20drawings/settings.jpg)


## HOW TO
* const char* ssid = "LOGIN";           // имя wifi роутера / точки доступа  
* const char* password = "PASSWORD";    // пароль wifi роутера / точки доступа  
* String channel_ID = "ID";             // ID канала (копировать из строки адреса канала)  
* String API_key = "KEY";               // API ключ аккаунта канала (как получить: https://www.slickremix.com/docs/get-api-key-for-youtube/ )  
* int max_gain = 180;   // число подписок в час, при котором цвет станет красным  
