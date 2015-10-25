<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tiles_users".
 *
 * @property integer $tile
 * @property integer $level
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property Levels $level0
 * @property Tiles $tile0
 */
class TilesUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiles_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tile', 'level', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['level'], 'exist', 'skipOnError' => true, 'targetClass' => Levels::className(), 'targetAttribute' => ['level' => 'id']],
            [['tile'], 'exist', 'skipOnError' => true, 'targetClass' => Tiles::className(), 'targetAttribute' => ['tile' => 'id']],
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
            'tile' => 'Tile',
            'level' => 'Level',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevel0()
    {
        return $this->hasOne(Levels::className(), ['id' => 'level']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTile0()
    {
        return $this->hasOne(Tiles::className(), ['id' => 'tile']);
    }
}
