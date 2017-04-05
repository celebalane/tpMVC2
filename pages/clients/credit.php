<?php
    $users = App::getInstance()->getTable('Customer')->all();
    if(isset($_POST["society"])){
        App::getInstance()->getTable('Credit')->create($_POST);
        header('location: index.php?p=Clients');
        exit();
    }
?>
<h1>Ajouter un crédit</h1>

<form action="" method="POST">
    <select name="userId" required>
        <?php foreach ($users as $key => $value): ?>
            <?php if ($value->id == $_GET["id"]): ?>
                <option selected="selected" value="<?=$value->id?>"><?=$value->lastName?> <?=$value->firstName?></option>
            <?php else : ?>
                <option value="<?=$value->id?>"><?=$value->lastName?> <?=$value->firstName?></option>
            <?php endif ?>
        <?php endforeach ?>
    </select>
    <input type="text" name="society" placeholder="Organisme" required/>
    <input type="text" name="amount" placeholder="Montant" required/>
    <input type="submit" value="Envoyer" />
</form> 