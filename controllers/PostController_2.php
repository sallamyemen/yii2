<?php


namespace app\controllers;

//use yii\BaseYii;
use Yii;
use app\models\Post;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionTest()
    {
      // $names = ['ivanov' , 'smirnov', 'sidorov'];
       // print_r($names);
       //var_dump($names);
       //var_dump(Yii::$app);
       //$this->debug($names);
        //$this->debug(yii::$app);
        return $this->render('test');
    }

    public function actionIndex()
    {
        if( Yii::$app->request->isAjax ){
            dd($_POST);die;
            debug($_GET);
            return 'test';
        }

        $post = Post::find()->all();

        // dd($post);die;

        if (Yii::$app->request->post()) {
            
            $request = Yii::$app->request->post();

            $slug = explode('_', $request);

            dd($request);die;

            // if (!empty($post['redactor'])) {

            //     $model = new Post();
            //     $model->post = $post['redactor'];

            //     if($model->save()) {
            //         Yii::$app->session->setFlash('success', 'Новость добавлена!');
            //     }
            // }

            // print_r($post['redactor']);die;

         } 
        return $this->render('index', ['post' => $post]);
    }

    public function actionShow()
    {
       // $this->layout = 'basic';
        $model = Post::find()->orderBy(['id' => SORT_ASC])->all();
        return $this->render('show', ['model' => $model]);
    }

    public function actionPost($id)
    {
       $post_id = Yii::$app->request->post();

       //var_dump($post_id);die;

       // $this->layout = 'basic';
        $model = Post::findone($id);
        return $this->render('post', ['model' => $model]);
    }

}