<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property string $question
 * @property integer $part
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property Answers[] $answers
 * @property Parts $part0
 * @property User $createdBy
 * @property User $updatedBy
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question'], 'required'],
            [['part', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['question'], 'string', 'max' => 255],
            [['part'], 'exist', 'skipOnError' => true, 'targetClass' => Parts::className(), 'targetAttribute' => ['part' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className()
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'part' => 'Part',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answers::className(), ['question' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPart0()
    {
        return $this->hasOne(Parts::className(), ['id' => 'part']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
}
