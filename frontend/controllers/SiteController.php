<?php

namespace frontend\controllers;

use cheatsheet\Time;
use common\sitemap\UrlsIterator;
use frontend\models\ContactForm;
use frontend\modules\question\models\Answers;
use frontend\modules\question\models\Questions;
use frontend\modules\question\models\UserAnswers;
use Sitemaped\Element\Urlset\Urlset;
use Sitemaped\Sitemap;
use Yii;
use yii\filters\PageCache;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class' => PageCache::class,
                'only' => ['sitemap'],
                'duration' => Time::SECONDS_IN_AN_HOUR,
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale' => [
                'class' => 'common\actions\SetLocaleAction',
                'locales' => array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInvestigation()
    {
        return $this->render('investigation');
    }

    public function actionPoll()
    {
        return $this->render('poll');
    }


    public function actionChannels()
    {
        return $this->render('channels');
    }



    /**
     * @return string|Response
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => 'Спасибо. Мы свяжемся с Вами в ближайшее время.',
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            }

            Yii::$app->getSession()->setFlash('alert', [
                'body' => 'Ошибка при отправке сообщения.',
                'options' => ['class' => 'alert-danger']
            ]);
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }

    /**
     * @param string $format
     * @param bool $gzip
     * @return string
     * @throws BadRequestHttpException
     */
    public function actionSitemap($format = Sitemap::FORMAT_XML, $gzip = false)
    {
        $links = new UrlsIterator();
        $sitemap = new Sitemap(new Urlset($links));

        Yii::$app->response->format = Response::FORMAT_RAW;

        if ($gzip === true) {
            Yii::$app->response->headers->add('Content-Encoding', 'gzip');
        }

        if ($format === Sitemap::FORMAT_XML) {
            Yii::$app->response->headers->add('Content-Type', 'application/xml');
            $content = $sitemap->toXmlString($gzip);
        } else if ($format === Sitemap::FORMAT_TXT) {
            Yii::$app->response->headers->add('Content-Type', 'text/plain');
            $content = $sitemap->toTxtString($gzip);
        } else {
            throw new BadRequestHttpException('Unknown format');
        }

        $linksCount = $sitemap->getCount();
        if ($linksCount > 50000) {
            Yii::warning(\sprintf('Sitemap links count is %d'), $linksCount);
        }

        return $content;
    }

    public function actionShare($token){


        $questions = Questions::find()->where(['token' => $token])->one();
        $answer = Answers::find()->where(['question_id' => $questions->id_question])->all();


        return $this->render('share', ['questions' => $questions,'answer' => $answer]);


    }

    public function actionSaveanswer($question,$id){

        $model = new UserAnswers();

        $q = Questions::find()->where(['token' => $question])->one();

        $model->question_id = $q->id_question;
        $model->user_id = Yii::$app->user->identity->id;
        $model->answer_id = $id;
        $model->created_at = time();


        $model->save();
        Yii::$app->getSession()->setFlash('alert', [
            'body' => 'Спасибо за Ваш ответ! Вы помогаете сделать мир лучше =)',
            'options' => ['class' => 'alert-success']
        ]);



        return $this->goHome();

    }

//    public function actionValidate()
//    {
//        $model = new MyModel();
//        $request = \Yii::$app->getRequest();
//        if ($request->isPost && $model->load($request->post())) {
//            \Yii::$app->response->format = Response::FORMAT_JSON;
//            return ActiveForm::validate($model);
//        }
//    }
//
//    public function actionSave()
//    {
//        $model = new MyModel();
//        $request = \Yii::$app->getRequest();
//        if ($request->isPost && $model->load($request->post())) {
//            \Yii::$app->response->format = Response::FORMAT_JSON;
//            return ['success' => $model->save()];
//        }
//        return $this->renderAjax('myViewName', [
//            'model' => $model,
//        ]);
//    }
}
