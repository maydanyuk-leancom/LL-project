<?php

namespace frontend\modules\question\controllers;
use frontend\modules\question\models\UserAnswers;
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

    public function actionIndex()
    {
        $addedquestionsid = new AddedQuestions();
        $addedquestionstext = new Questions();


        return $this->render('index',['addedquestionsid'=> $addedquestionsid,'addedquestionstext'=> $addedquestionstext]);

    }



    public function actionMyinvestigations()
    {



        $addedquestions = AddedQuestions::find()->where(['user_id' => Yii::$app->user->identity->id])->all();




        $q = [];

        foreach($addedquestions as $v)
        {
            $question = Questions::find()->where(['id_question' => $v->id])->all();
            $answers = Answers::find()->where(['question_id' => $v->id])->all();

            $q_a = Questions::find()->joinWith('answers')->where(['id_question' => $v->id])->all();



                $q[] = $q_a;

        }





        return $this->render('myinvestigations', ['q' => $q ]);
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





    }


//
//    public function actionShowQuestions(){
//
//
//        return $this->render('index',compact('index'));
////        return $this->render('index',['addedquestionsid'=> $addedquestionsid,'addedquestionstext'=> $addedquestionstext]);
//    }


}
