<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use yii\helpers\Url;
use app\models\blog;
use yii\data\Pagination;

class BlogController extends Controller
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
            
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        
        $data = blog::find()->Where(['>','id',  '0']);


        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();

        
        return $this->render('index',['pages'=>$pages, 'model'=>$model]);
    }
    public function actionPage(){
        return $this->render('page');
    }
   
   
   
}
