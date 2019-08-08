<?php

namespace frontend\modules\channel\controllers;

use yii\web\Controller;

/**
 * Default controller for the `channel` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout = '@app/modules/user/views/layouts/base.php';

    public function actionChannel()
    {
        return $this->render('channel');
    }
    public function actionEditchannel()
    {
        return $this->render('editchannel');
    }

}
