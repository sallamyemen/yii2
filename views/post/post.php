<h1>similarities</h1>
<?php
// echo $model;

// dd($sub); die;

?>

<table class="table table-striped">
    <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Цвет метки</td>            
        </tr>    
    </thead>
    
    
    <?php foreach ($sub as $key => $value): ?>

    <tr id = "row_<?= $value['id'] ?>" class="<?= $value['color'] ?> trow" value="<?= $value['id'] ?> ">
        <td scope="row"><?= $value['id'] ?></td>
        <td><?= $value['color'] ?></td>
       
    </tr>
        
    <?php endforeach ?>

    
</table>