<?php
use yii\helpers\Html;
//var_dump($model);die;
?>


<h1>Post Show</h1>

<?php foreach ($model as $key => $value) { ?>
    <div>
            <span><?= Html::a($value->id, ['post', 'id' => $value->id], ['class' => 'profile-link'], [
        'data' => ['method' => 'post', 'params' => ['id' => $value->id,]]]) ?></span>        
    </div>
    
<?php } ?>

<!-- <button id="btn" class="btn btn-success">Click me...</button> -->
<?php $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset'])  ?>
<?php $this->registerCss('.container{background: #ccc;}'); ?>

<?php
$js = <<<JS
    $('#btn').on('click', function (){
       $.ajax({
            url:'index.php?r=post/index',
            data:{test: '123'},
            type: 'GET',
            success: function(res){
               // console.log(res);
            },
            error: function (){
                alert('Error!');
            }
       }); 
    });
JS;

$this->registerJs($js);

?>