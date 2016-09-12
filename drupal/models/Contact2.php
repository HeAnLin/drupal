<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $qq
 * @property integer $phone
 * @property string $body
 */
class Contact2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['qq', 'phone'], 'integer'],
            [['name', 'email', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'email' => 'Email',
            'qq' => 'QQ',
            'phone' => 'Phone',
            'body' => 'Body',
        ];
    }
}
