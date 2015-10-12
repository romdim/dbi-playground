<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "password_answers".
 *
 * @property integer $password
 * @property integer $answer
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Answers $answer0
 * @property Passwords $password0
 */
class PasswordAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'password_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password', 'answer'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['answer'], 'exist', 'skipOnError' => true, 'targetClass' => Answers::className(), 'targetAttribute' => ['answer' => 'id']],
            [['password'], 'exist', 'skipOnError' => true, 'targetClass' => Passwords::className(), 'targetAttribute' => ['password' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password' => 'Password',
            'answer' => 'Answer',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswer0()
    {
        return $this->hasOne(Answers::className(), ['id' => 'answer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPassword0()
    {
        return $this->hasOne(Passwords::className(), ['id' => 'password']);
    }
}
