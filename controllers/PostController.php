<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{

    public $layout = 'basic';

//    public function beforeAction($action){
//
//        if($action->id == 'index')
//            $this->enableCsrfValidation = false;
//
//        return parent::beforeAction($action);
//    }

    public function actionIndex(){

        if(Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
        }

        $this->view->title = 'Все статьи';

        return $this->render('test');
    }

    public function actionShow(){
        $this->view->title = "Одна статья";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание...']);
        return $this->render('show');
    }

}