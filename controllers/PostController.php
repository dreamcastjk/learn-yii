<?php


namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex(){

        if(Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
        }

        $model = new TestForm();

        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow(){
        $this->view->title = "Одна статья";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание...']);
        return $this->render('show');
    }

}