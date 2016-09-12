<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use yii\helpers\Url;

class MemberController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
      return [ 
            'access' => [ 
            'class' => AccessControl::className(), 
            'rules' => [ 
                            [ 
                            'actions' => ['login', 'error', 'captcha'], 
                            'allow' => true, 
                            ], 
                        ],
                        ], 
                        ]; 
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 4, 
                'minLength' => 4 
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
      
        return $this->render('index');
    }

    public function actioncaptcha(){
        
        return $this->render('captcha');


    }
   
   
}
