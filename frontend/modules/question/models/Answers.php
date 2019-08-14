<?php

namespace frontend\modules\question\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property int $question_id
 * @property string $answers
 *
 * @property Questions $question
 * @property UserAnswers[] $userAnswers
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'answers'], 'required'],
            [['question_id'], 'integer'],
            [['answers'], 'string'],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questions::className(), 'targetAttribute' => ['question_id' => 'id']],
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
            'answers' => 'Answers',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Questions::className(), ['id' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAnswers()
    {
        return $this->hasMany(UserAnswers::className(), ['answer_id' => 'id']);
    }
}
