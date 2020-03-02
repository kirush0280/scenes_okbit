Сцены для Majordomo для модуля scenes_okbit
**(инструкция для тех кто понимает, что делает)**

1. Приобретаем лицензию (получите ID и ключ) - https://smart-home.ee/ru/magazin/product/view/11/410
2. Скачиваем модуль:
git clone https://github.com/kirush0280/scenes_okbit.git
3. Переносим папки modules/ templates/ в соответствующие папки Majordomo
4. В MDM: Система->Модули находим модуль scenes_okbit, заходим в него, жмем Install
5. В MDM появится раздел "Визуализация"-> Smart-Home.ee, переходим туда
6. "**Добавить новую сцену**", создаем пустую и сохраняем.
7. Во вкладке "Лицензия", вносим ID и ключ.

-------
Для нормальной работы модуля **ОБЯЗАТЕЛЬНО НУЖНО**
1. отключаем strict mode:
```
# cat /etc/mysql/conf.d/disable_strict_mode.cnf
[mysqld]
sql_mode=IGNORE_SPACE,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION
```
2. В mysql в таблице elements, столбец CSS, необходимо изменить тип поля TEXT на LONGTEXT.
------
To-do list (за информацией к https://tlgg.ru/kirush80). Все необходимо адаптировать для темной и светлой темы:
1. Термостат с кнопками (/elements/slider_wb_r_usual.php, /elements/slider_wb_usual.php).
2. Плеер медиа (аудио)
3. Сделать кнопку "Пересобрать все сцены"
4. Спрятать отображение разделов (LEFT/CENTER/RIGHT) в сценах HOME/ROOM/SYS в которых отсутсвуют элементы.
