<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{

    public function actionTest(){

        $names = ['Ivanov', 'Petrov', 'Sidorov'];



        return $this->render('test');

    }

}