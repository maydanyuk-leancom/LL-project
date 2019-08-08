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
 * @property AddedQuestions $question
 * @property Answers $answer
 * @property User $user
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
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => AddedQuestions::className(), 'targetAttribute' => ['question_id' => 'id']],
            [['answer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Answers::className(), 'targetAttribute' => ['answer_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
        return $this->hasOne(AddedQuestions::className(), ['id' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswer()
    {
        return $this->hasOne(Answers::className(), ['id' => 'answer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
