<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use yii\helpers\Url;

class PartController extends Controller
{
    public $layout='common';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
      return [ 
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

   
   
   
}
