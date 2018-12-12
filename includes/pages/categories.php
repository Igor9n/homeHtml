<?php include 'includes/content/cats.php';?>
<div class="col-sm-2">
    <div class="list-group row justify-content-start">
            <form>
                <button type="submit" name="category" value="all" class="list-group-item list-group-item-action"><b>All items</b></button>
            </form>
        <?php foreach ($categories as $value):?>
            <form>
                <button type="submit" name="category" value="<?=$value['id']?>" class="list-group-item list-group-item-action"><?=$value['name']?></button>
            </form>
        <?php endforeach; ?>
    </div>
</div>