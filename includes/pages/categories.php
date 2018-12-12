<?php require 'includes/content/cats.php';?>
<div class="col-sm-2">
    <div class="list-group row justify-content-start">
            <a href="category.php?id=all" class="list-group-item list-group-item-action"><b>All items</b></a>
        <?php foreach ($categories as $value):?>
            <a href="category.php?id=<?=$value['id'];?>" class="list-group-item list-group-item-action"><?=$value['name']?></a>
        <?php endforeach; ?>
    </div>
</div>