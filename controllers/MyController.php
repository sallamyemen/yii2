<?php


namespace app\controllers;

//use yii\web\controller;


class MyController extends AppController
{
    public function actionIndex($id = null){
        $hi = 'hello, world!';
        $names = ['salyam', 'is', 'the best'];

        if(!$id) $id = 'test';       
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost(){
        return $this->render('blog-post');
    }

}
