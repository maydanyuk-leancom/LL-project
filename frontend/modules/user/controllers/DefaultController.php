<?php

namespace frontend\modules\user\controllers;

use common\base\MultiModel;
use common\models\User;
use frontend\modules\user\models\AccountForm;
use frontend\modules\question\models\AddedQuestions;
use frontend\modules\question\models\Questions;
use frontend\modules\question\models\Answers;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{

    public $layout = 'base';
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'avatar-upload' => [
                'class' => UploadAction::class,
                'deleteRoute' => 'avatar-delete',
                'on afterSave' => function ($event) {
                    /* @var $file \League\Flysystem\File */
                    $file = $event->file;
                    $img = ImageManagerStatic::make($file->read())->fit(215, 215);
                    $file->put($img->encode());
                }
            ],
            'avatar-delete' => [
                'class' => DeleteAction::class
            ]
        ];
    }



    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    /**
     * @return string|\yii\web\Response
     */

    public function actionShowanswers($id)
    {


        $answer = Answers::find()->where(['question_id' => $id])->all();
        $questions = Questions::find()->where(['id_question' => $id])->one();

        return $this->render('showanswers', ['questions' => $questions,'answer' => $answer]);


    }


    public function actionSettings()
    {
        $accountForm = new AccountForm();
        $accountForm->setUser(Yii::$app->user->identity);





        $model = new MultiModel([
            'models' => [
                'account' => $accountForm,
                'profile' => Yii::$app->user->identity->userProfile
            ]
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $locale = $model->getModel('profile')->locale;
            Yii::$app->session->setFlash('forceUpdateLocale');
            Yii::$app->session->setFlash('alert', [
                'options' => ['class' => 'alert-success'],
                'body' => Yii::t('frontend', 'Ваш аккаунт был успешно сохранён', [], $locale)
            ]);
            return $this->refresh();
        }

        return $this->render('settings', ['model' => $model ]);
    }

}
