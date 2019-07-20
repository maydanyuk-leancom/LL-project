<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Login action.
     *
     * @return string
     */
//    public function actionLogin()
//    {
//
//        if (Yii::$app->controller->action->id === 'login') {
//            /**
//             * Do not use this code in your template. Remove it.
//             * Instead, use the code  $this->layout = '//main-login'; in your controller.
//             */
//            echo $this->render(
//                'main-login',
//                ['content' => $content]
//            );
//        } else {
//            if (class_exists('backend\assets\AppAsset')) {
//                backend\assets\AppAsset::register($this);
//            } else {
//                app\assets\AppAsset::register($this);
//            }
//            dmstr\web\AdminLteAsset::register($this);
//        }
//    }
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}