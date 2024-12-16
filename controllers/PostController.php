<?php


namespace app\controllers;

use Yii;
use app\models\Post;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionTest()
    {
      
        return $this->render('test');
    }

    public function actionIndex()
    {
        $post = Post::find()->all();
        
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
       if (Yii::$app->request->post()) {
            
                $request = Yii::$app->request->post();

                $slug = explode('row_', $request['id']);

                $postid = $slug[1];                

                if ($postid > 0) {
                    $model = Post::find()->where(['id' => $postid])->one();
                    
                    $lat = $model->latitude;
                    $long = $model->longitude;

                    //dd($lat);die;
                    $same = Post::find()->all();
                    $sub = [];

                    foreach ($same as $key => $value) {
                        if (($value->latitude == $lat) && ($value->longitude == $long) ) {
                            $sub[$key]['id'] = $value->id;
                            $sub[$key]['color'] = $value->color;
                        }
                    }

                    $count = count($sub);                   
                }
                else{
                    Yii::$app->session->setFlash('error', 'выбирите метку!');
                    return $this->redirect(Yii::$app->request->referrer);
                }

            }
        return $this->render('post', ['sub' => $sub, 'count' => $count]);
    }

}
