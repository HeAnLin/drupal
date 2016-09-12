<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use yii\helpers\Url;
use app\models\Contact;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ContactController extends Controller
{
    public $layout='common';
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
      return [ 
      'verbs' => [
            'class' => VerbFilter:: className(),
            'actions' => [
                           
                 'create' => [ 'post']
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
                'maxLength' => 5, 
                'minLength' => 5 
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
     public function actionCreate()
    {
        $model = new Contact();
        $model->name=$_POST['name'];
        $model->qq=$_POST['qq'];
        $model->email=$_POST['email'];
        $model->body=$_POST['body'];
        $model->phone=$_POST['phone'];
        $model->save();
        return $this->redirect(['contact/index']);
    }

    public function actionCaptcha(){
        return $this->renderPartial('captcha');
    }

   
   
   
}
