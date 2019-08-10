# MIO


<!-- /BADGES -->

Create your investigation with us!


## Настройка


1. [Установите NPM для Windows](https://nodejs.org/en/download/).
2. Настройки openserver: PHP >= 7.1.0 64х -> Соответствующий Apache (v + 64x);
3. В конфигурации рhp.ini раскоментируем extension=php_intl.dll. Так же ставим memory_limit= -1.
4. OpenServer необходимо запускать от имени Администратора системы иначе возникают ошибки.  
5. Запустите консоль OpenServer и выполните в ней команды
    ```bash
    cd domains
    
    composer self-update
    
    composer create-project mio/llproject -s dev mio
    ```
6. Переходим в каталог приложения
   
      ```bash 
      cd mio
      ```
7. Устанавливаем недостающие компоненты
      
      ```bash
      composer install
      ```
8. Генерируем разные ключи в файле окружения и другое
       
       ```bash
       php console/yii app/setup
       ```
9. Устанавливаем компоненты npm
       ```bash
          npm install
       ```
10. В файле frontend\web\css\style.less в первой строке пишем вместо @import "_article"; строку @import "_article.less"; 
   
11. Компилируем
       ```bash
       npm run build
       ```
12. Перенос сообщений между различными источниками сообщений:
       ```bash
       php console/yii message/migrate @common/config/messages/php.php @common/config/messages/db.php
       ```
13. Замена языка исходного кода:   
       ```bash
       php console/yii message/replace-source-language @common/config/messages/php.php ru-RU
       ```
14. Удаление Yii::t из исходного кода
       ```bash
       php console/yii message/replace-source-language @common/config/messages/php.php
       ```
15. В OpenServer настроить 3 домена     
               
     
   
 



