<?php
namespace app\models;
use Yii;

class Contact extends \yii\db\ActiveRecord
{
	public static function tableName()
    {
        return 'contact';
    }

    public function rules()
    {
    	return[
    		[['name', 'email', 'qq', 'phone','body'], 'required'],
            [['name','body','email'], 'string'],
            [['qq', 'phone'], 'integer'],

    	];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'qq' => 'QQ',
            'phone' => 'Phone',
            'body'=>'Body'
        ];
    }
}

?>