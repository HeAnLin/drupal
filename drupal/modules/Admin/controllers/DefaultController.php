<?php

namespace app\modules\Admin\controllers;

use yii\web\Controller;
use app\models\Status;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	

        return $this->render('index');
    }
}
