<?php

use vova07\imperavi\Widget;
use yii\widgets\ActiveForm;
use app\models\Post;
use yii\helpers\Html;

$js = <<<JS

$('.red').hover(
  function () {    
   $(this).css("background", '#f24c3a');
  }, 
  function () {
    $(this).css("background","");
  }
);

$('.blue').hover(
  function () {    
    $(this).css("background", '#647dfa');
  }, 
  function () {
    $(this).css("background","");
  }
);

$('.trow').on( "click", function() {
    //this.form.submit();

    var v = this.id;
    console.log(v);

    var old_class = this.className.split(' ')[0];
    console.log(old_class);

    $('#id').val(v);
    console.log($('#id').val(v));

    clickHandler(v, old_class);

    if(old_class == "red"){
        $(this).css("background", '#f24c3a');

    }
    if(old_class == "blue"){
        $(this).css("background", '#647dfa');
    }

    // $.ajax({
    //         url:'index',
    //         data:{test: v},
    //         type: 'post',
    //         success: function(res){
    //          console.log(res);
    //         },
    //         error: function (){
    //             console.log('Error!');
    //         }
    //    }); 

});   


function clickHandler(i, c){
  var element = document.getElementById(i); 
    if(c == "red") {
        
        $('.trow').removeClass('red-back');
        $('.trow').removeClass('blue-back');
        element.classList.toggle("red-back");
    }       
        
    if(c == "blue"){
        
        $('.trow').removeClass('blue-back');
        $('.trow').removeClass('red-back');
        element.classList.toggle("blue-back");
    }
}

JS;

$this->registerJs($js);

$css = <<<CSS

.red-back {
  background-color: #f24c3a !important;  
}

.blue-back {
  background-color: #647dfa !important;  
}

   
CSS;
$this->registerCss($css);
?>

<h1>Coordination's page</h1>

<?= Html::beginForm(['post', 'id' => 'regweb'], 'post', ['enctype' => 'multipart/form-data']) ?>
    <input type="hidden" id="id" name="id" value="row_0">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'id' => 'btn_send']) ?>
<?= Html::endForm() ?>

<table class="table table-striped">
    <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Цвет метки</td>
            <td scope="col">Широта</td>
            <td scope="col">Долгота</td>
        </tr>    
    </thead>
    
    
    <?php foreach ($post as $key => $value): ?>

    <tr id = "row_<?= $value->id ?>" class="<?= $value->color ?> trow" value="<?= $value->id ?> ">
        <td scope="row"><?= $value->id ?></td>
        <td><?= $value->color ?></td>
        <td><?= $value->latitude ?></td>
        <td><?= $value->longitude ?></td>
    </tr>
        
    <?php endforeach ?>

    
</table>


