<?php

use vova07\imperavi\Widget;
use yii\widgets\ActiveForm;
use app\models\Post;
use yii\helpers\Html;

// dd();die;

// echo \vova07\imperavi\Widget::widget([
//     'name' => 'redactor',
//     'settings' => [
//         'lang' => 'ru',
//         'minHeight' => 200,
//         'plugins' => [
//             'clips',
//             'fullscreen'
//         ]
//     ]
// ]);


dd($post);die;
?>

<h1>Post Index</h1>

<?= Html::beginForm(['/post/index', 'id' => 'regweb'], 'post', ['enctype' => 'multipart/form-data']) ?>
<?= \vova07\imperavi\Widget::widget([
    'name' => 'redactor',
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'plugins' => [
            'clips',
            'fullscreen'
        ]
    ]
]); ?>

<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'id' => 'btn_send']) ?>

<?= Html::endForm() ?>

<?php //$form = ActiveForm::begin(); ?>

<?php //echo $form->field($model, 'post')->widget(\vova07\imperavi\Widget::widget(), [
//     'settings' => [
//         'lang' => 'ru',
//         'minHeight' => 200,
//         'plugins' => [
//             'clips',
//             'fullscreen'
//         ]
//     ]
// ]); 
?>

<? //php ActiveForm::end(); ?>