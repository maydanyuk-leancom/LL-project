<?php

use yii\helpers\Html;

$this->title = 'Информация о системе';
?>
<?php echo Yii::t(
    'backend',
    'Извините, но приложению не удалось собрать информацию о вашей системе. Смотрите {link}.',
    ['link' => Html::a('trntv/probe', 'https://github.com/trntv/probe#user-content-supported-os')]
);
