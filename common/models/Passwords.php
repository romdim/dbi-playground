<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "passwords".
 *
 * @property integer $id
 * @property integer $password
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property PasswordAnswers[] $passwordAnswers
 */
class Passwords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'passwords';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password'], 'required'],
            [['password', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className()
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'password' => 'Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasswordAnswers()
    {
        return $this->hasMany(PasswordAnswers::className(), ['password' => 'id']);
    }
}
