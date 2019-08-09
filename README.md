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
    
    composer global require "fxp/composer-asset-plugin"
    
    composer create-project mio/llproject -s dev mio
    ```
6. Скопируйте файл .env.dist в .env в корневом каталоге проекта. Проверьте установки приложения в файле .env
  
7. Установка режима отладки и текущего окружения
    YII_DEBUG = true  YII_ENV = dev
  
8. Установка связи с базой данных

    DB_DSN = mysql:host=127.0.0.1;port=3306;dbname=mio
  
    TEST_DB_DSN = mysql:host=127.0.0.1;port=3306;dbname=mio
  
    DB_USERNAME = root
  
    DB_PASSWORD = [как правило пароля здесь не ставят]
  
    TEST_DB_USERNAME = root
  
    TEST_DB_PASSWORD = [как правило пароля здесь не ставят]
    
9.  В консоле запустите следующие команды (создаем рабочую базы данных)
     ```bash
     mysqladmin -uroot -p[ваш пароль] create mio
     ```
10. Переходим в каталог приложения
   
      ```bash
      cd mio
      ```
11. Устанавливаем недостающие компоненты
      
      ```bash
      composer install
      ```
12. Генерируем разные ключи в файле окружения и другое
       
       ```bash
       php console/yii app/setup
       ```
13. Устанавливаем компоненты npm
       ```bash
          npm install
       ```
14. В файле frontend\web\css\style.less в первой строке пишем вместо @import "_article"; строку @import "_article.less"; 
   
15. Компилируем
       ```bash
       npm run build
       ```
16. Перенос сообщений между различными источниками сообщений:
       ```bash
       php console/yii message/migrate @common/config/messages/php.php @common/config/messages/db.php
       ```
17. Замена языка исходного кода:   
       ```bash
       php console/yii message/replace-source-language @common/config/messages/php.php ru-RU
       ```
18. Удаление Yii::t из исходного кода
       ```bash
       php console/yii message/replace-source-language @common/config/messages/php.php
       ```
19. В OpenServer настроить 3 домена     
               
     
   
 



