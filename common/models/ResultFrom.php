<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "result_from".
 *
 * @property integer $id
 * @property integer $part
 * @property integer $result
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property Parts $part0
 * @property ResultsPage $result0
 */
class ResultFrom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'result_from';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part', 'result', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['part'], 'exist', 'skipOnError' => true, 'targetClass' => Parts::className(), 'targetAttribute' => ['part' => 'id']],
            [['result'], 'exist', 'skipOnError' => true, 'targetClass' => ResultsPage::className(), 'targetAttribute' => ['result' => 'id']],
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
            'part' => 'Part',
            'result' => 'Result',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
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
    public function getResult0()
    {
        return $this->hasOne(ResultsPage::className(), ['id' => 'result']);
    }
}
