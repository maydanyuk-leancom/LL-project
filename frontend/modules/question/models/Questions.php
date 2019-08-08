<?php

namespace frontend\modules\question\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $id
 * @property int $id_question
 * @property string $question
 * @property string $token
 *
 * @property Answers[] $answers
 * @property AddedQuestions $question0
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_question', 'question', 'token'], 'required'],
            [['id_question'], 'integer'],
            [['question', 'token'], 'string'],
            [['id_question'], 'exist', 'skipOnError' => true, 'targetClass' => AddedQuestions::className(), 'targetAttribute' => ['id_question' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_question' => 'Id Question',
            'question' => 'Question',
            'token' => 'Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answers::className(), ['question_id' => 'id_question']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion0()
    {
        return $this->hasOne(AddedQuestions::className(), ['id' => 'id_question']);
    }
}
