<?php

namespace frontend\modules\question\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "user_answers".
 *
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property int $answer_id
 * @property int $created_at
 *
 * @property Questions $question
 * @property User $user
 * @property Answers $answer
 */
class UserAnswers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'answer_id'], 'required'],
            [['question_id', 'user_id', 'answer_id', 'created_at'], 'integer'],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questions::className(), 'targetAttribute' => ['question_id' => 'id_question']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['answer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Answers::className(), 'targetAttribute' => ['answer_id' => 'id']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_id' => 'Question ID',
            'user_id' => 'User ID',
            'answer_id' => 'Answer ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Questions::className(), ['id_question' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswer()
    {
        return $this->hasOne(Answers::className(), ['id' => 'answer_id']);
    }

    public function getCountAnswers($id)
    {

        $model = $this->question_id = self::find()
                ->where(['question_id' => $id])
                ->all();




        $same = [];

        foreach($model as $v){

            $same[] = $v->answer_id;

        }
        return array_values(array_count_values($same));


    }
}
