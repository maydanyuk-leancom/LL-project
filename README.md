# MIO


<!-- /BADGES -->

Create your investigation with us!


## Настройка


1. [Установите NPM для Windows](https://nodejs.org/en/download/)
2. OpenServer необходимо запускать от имени Администратора системы иначе возникают ошибки. 
3. Запустите консоль OpenServer и выполните в ней команды
    ```bash
    cd domains
    
    composer self-update
    
    composer global require "fxp/composer-asset-plugin"
    
    composer create-project maydanyuk-leancom/LL-project mio
    ```
4. Скопируйте файл .env.dist в .env в корневом каталоге проекта. Проверьте установки приложения в файле .env
  
5. Установка режима отладки и текущего окружения
    YII_DEBUG = true  YII_ENV = dev
  
6. Установка связи с базой данных

    DB_DSN = mysql:host=127.0.0.1;port=3306;dbname=mio
  
    TEST_DB_DSN = mysql:host=127.0.0.1;port=3306;dbname=mio
  
    DB_USERNAME = root
  
    DB_PASSWORD = [как правило пароля здесь не ставят]
  
    TEST_DB_USERNAME = root
  
    TEST_DB_PASSWORD = [как правило пароля здесь не ставят]
    
7.  В консоле запустите следующие команды (создаем рабочую базы данных)
     ```bash
     mysqladmin -uroot -p[ваш пароль] create mio
     ```
   8. Переходим в каталог приложения
   
      ```bash
      cd mio
      ```
   9. Устанавливаем недостающие компоненты
      
      ```bash
      composer install
      ```
   10. Генерируем разные ключи в файле окружения и другое
       
       ```bash
       php console/yii app/setup
       ```
   11. Устанавливаем компоненты npm
       ```bash
          npm install
       ```
   12. В файле frontend\web\css\style.less в первой строке пишем вместо @import "_article"; строку @import "_article.less"; 
   
   13. Компилируем
       ```bash
       npm run build
       ```
   14. Перенос сообщений между различными источниками сообщений:
       ```bash
       php console/yii message/migrate @common/config/messages/php.php @common/config/messages/db.php
       ```
   15. Замена языка исходного кода:   
       ```bash
       php console/yii message/replace-source-language @common/config/messages/php.php ru-RU
       ```
   16. Удаление Yii::t из исходного кода
       ```bash
       php console/yii message/replace-source-language @common/config/messages/php.php
       ```
   17. В OpenServer настроить 3 домена     
               
     
   
 



