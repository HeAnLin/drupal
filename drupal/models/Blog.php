<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $title
 * @property string $image
 * @property string $body
 * @property string $create_time
 * @property string $update_time
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'title', 'image', 'body'], 'required'],
            [['uid'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['title', 'image', 'body'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'title' => 'Title',
            'image' => 'Image',
            'body' => 'Body',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
