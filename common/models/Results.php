<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "results".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $text
 * @property integer $results_page
 * @property string $small_photo
 * @property string $big_photo
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property ResultsPage $resultsPage
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'text'], 'string'],
            [['results_page', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'small_photo', 'big_photo'], 'string', 'max' => 255],
            [['results_page'], 'exist', 'skipOnError' => true, 'targetClass' => ResultsPage::className(), 'targetAttribute' => ['results_page' => 'id']],
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
            'name' => 'Name',
            'description' => 'Description',
            'text' => 'Text',
            'results_page' => 'Results Page',
            'small_photo' => 'Small Photo',
            'big_photo' => 'Big Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultsPage()
    {
        return $this->hasOne(ResultsPage::className(), ['id' => 'results_page']);
    }
}
