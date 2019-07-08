<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
/**
 * Инициализатор RBAC выполняется в консоли php yii rbac/init
 */
class RbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;

        $auth->removeAll(); //На всякий случай удаляем старые данные из БД...

        // Создадим роли админа, модератора(editor) и три роли пользователей free,advanced,premium
        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        $free = $auth->createRole('free');
        $advanced = $auth->createRole('advanced');
        $premium = $auth->createRole('premium');

        // запишем их в БД
        $auth->add($admin);
        $auth->add($editor);
        $auth->add($free);
        $auth->add($advanced);
        $auth->add($premium);

        // Создаем разрешения. Например, просмотр админки viewAdminPage, редактирование опроса, и три сопутствующих возможности для всех отдельные
        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = 'Просмотр админки';

        $updateQuestion = $auth->createPermission('updateQuestion');
        $updateQuestion->description = 'Редактирование опроса';

        $viewFree = $auth->createPermission('viewFree');
        $viewFree->description = 'Возможности free версии';

        $viewAdvaced = $auth->createPermission('viewFree');
        $viewAdvaced->description = 'Возможности advanced версии';

        $viewAPremium = $auth->createPermission('viewFree');
        $viewAPremium->description = 'Возможности premium версии';

        // Запишем эти разрешения в БД
        $auth->add($viewAdminPage);
        $auth->add($updateQuestion);
        $auth->add($viewFree);
        $auth->add($viewAdvaced);
        $auth->add($viewAPremium);


        // Теперь добавим наследования. Для роли модератора мы добавим разрешение updateQuestion,
        // а для админа добавим наследование от роли editor и еще добавим собственное разрешение viewAdminPage

        // Роли «Редактор опроса» присваиваем разрешение «Редактирование опроса»
        $auth->addChild($editor,$updateQuestion);

        // админ наследует роль редактора опроса.
        $auth->addChild($admin, $editor);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $viewAdminPage);

        $auth->addChild($free,$viewFree);

        $auth->addChild($advanced,$viewAdvaced);

        $auth->addChild($premium,$viewAPremium);

        // Назначаем роль admin пользователю с ID 1
        $auth->assign($admin, 1);

        // Назначаем роль editor пользователю с ID 2
        $auth->assign($editor, 2);

        $auth->assign($free, 3);

        $auth->assign($advanced, 4);

        $auth->assign($premium, 5);
    }
} 