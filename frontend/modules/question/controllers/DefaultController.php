<?php

namespace frontend\modules\question\controllers;
use common\base\MultiModel;
use frontend\modules\question\models\UserAnswers;
use frontend\modules\user\models\AccountForm;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
use Yii;
use yii\web\Controller;
use frontend\modules\question\models\AddedQuestions;
use frontend\modules\question\models\Questions;
use frontend\modules\question\models\Answers;
use yii\helpers\ArrayHelper;
use yii\db\Expression;

/**
 * Default controller for the `question` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public $layout = '@app/modules/user/views/layouts/base.php';


    public function actions()
    {
        return [
            'question-image-upload' => [
                'class' => UploadAction::class,
                'deleteRoute' => 'question-image-delete',
                'on afterSave' => function ($event) {
                    /* @var $file \League\Flysystem\File */
                    $file = $event->file;
                    $img = ImageManagerStatic::make($file->read())->fit(215, 215);
                    $file->put($img->encode());
                }
            ],
            'question-image-delete' => [
                'class' => DeleteAction::class
            ]
        ];
    }

    public function actionIndex()
    {
        $addedquestionsid = new AddedQuestions();
        $addedquestionstext = new Questions();


        return $this->render('index',['addedquestionsid'=> $addedquestionsid,'addedquestionstext'=> $addedquestionstext]);

    }

    public function actionNew()
    {

        return $this->render('new');

    }

    public function actionStep1()
    {

        $accountForm = new AccountForm();
        $accountForm->setUser(Yii::$app->user->identity);

        $model = new MultiModel([
            'models' => [
                'account' => $accountForm,
                'profile' => Yii::$app->user->identity->userProfile
            ]
        ]);

//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            $locale = $model->getModel('profile')->locale;
//            Yii::$app->session->setFlash('forceUpdateLocale');
//            Yii::$app->session->setFlash('alert', [
//                'options' => ['class' => 'alert-success'],
//                'body' => Yii::t('frontend', 'Ваш аккаунт был успешно сохранён', [], $locale)
//            ]);
//            return $this->refresh();
//        }

        return $this->render('step1', ['model' => $model ]);
    }




    public function actionMyinvestigations()
    {

        $addedquestions = AddedQuestions::find()->where(['user_id' => Yii::$app->user->identity->id])->all();

        $quesions_array = [];
        $sum_answers = [];

        foreach($addedquestions as $k => $v)
        {

            $questions_aanswers = Questions::find()->joinWith('answers')->where(['id_question' => $v->id])->all();

            $find_sum = (new UserAnswers())->getCountAnswers($v->id);

            $quesions_array[] = $questions_aanswers;
            $sum_answers[] = $find_sum;

        }


        return $this->render('myinvestigations', ['q' => $quesions_array,'s' => $sum_answers  ]);
    }





    public function actionSavequestions(){



        $user_id = Yii::$app->user->identity->id;




        $questions = Yii::$app->request->post()['questions'] ;


        $answers = Yii::$app->request->post()['answers'];
        $answers_id = Yii::$app->request->post()['answers_id'];




        foreach($questions as $v){

            $addedquestionsid = new AddedQuestions();

            $addedquestionsid->user_id = $user_id;

            if($addedquestionsid->save()){


            $addedquestionstext = new Questions();

            $addedquestionstext->id_question = AddedQuestions::find()->max('id') ;

            $my_str = preg_replace('/[^a-zA-Z]/', '', Yii::$app->security->generateRandomKey(100));

            $addedquestionstext->question = $v;

            $addedquestionstext->token = $my_str;

            $addedquestionstext->save();
        }


//            echo "<pre>";
//            print_r($answers);
//            echo "</pre>";
//
//            echo "<pre>";
//            print_r($answers_id);
//            echo "</pre>";

//            for ($i = 1; $i <= count($answers); $i++) {
//
//
//                $addedanswer = new Answers();
//
//                $addedanswer->question_id = AddedQuestions::find()->max('id');
//
//                $addedanswer->answers = $k;
//
//                $addedanswer->save();
//
//            }



            foreach($answers as $r){


                 $addedanswer = new Answers();

                $addedanswer->question_id = AddedQuestions::find()->max('id');

                $addedanswer->answers = $r;

                $addedanswer->save();


            }
        }


        return $this->redirect('/question/default/myinvestigations');



    }


//
//    public function actionShowQuestions(){
//
//
//        return $this->render('index',compact('index'));
////        return $this->render('index',['addedquestionsid'=> $addedquestionsid,'addedquestionstext'=> $addedquestionstext]);
//    }


}
