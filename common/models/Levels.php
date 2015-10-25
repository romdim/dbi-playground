<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "levels".
 *
 * @property integer $id
 * @property string $level
 * @property string $description
 * @property integer $score
 * @property string $color
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property TilesUsers[] $tilesUsers
 */
class Levels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'levels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['score', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['level', 'description', 'color'], 'string', 'max' => 255],
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
            'level' => 'Level',
            'description' => 'Description',
            'score' => 'Score',
            'color' => 'Color',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTilesUsers()
    {
        return $this->hasMany(TilesUsers::className(), ['level' => 'id']);
    }
}
