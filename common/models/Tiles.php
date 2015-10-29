<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tiles".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $text
 * @property integer $x
 * @property integer $y
 * @property integer $category
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property TilesCategories $category0
 * @property TilesUsers[] $tilesUsers
 */
class Tiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'description'], 'string'],
            [['x', 'y', 'category', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => TilesCategories::className(), 'targetAttribute' => ['category' => 'id']],
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
            'x' => 'X',
            'y' => 'Y',
            'category' => 'Category',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(TilesCategories::className(), ['id' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTilesUsers()
    {
        return $this->hasMany(TilesUsers::className(), ['tile' => 'id']);
    }
}
