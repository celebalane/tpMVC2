 <?php 
    $id = $_GET["id"];
    $user =  App::getInstance()->getTable('Customer')->findCustomer($id);
    $credit = App::getInstance()->getTable('Credit')->all();
?>

<h1>Liste des clients</h1>

<table>
    <thead>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Date de naissance</td>
            <td>Adresse</td>
            <td>Numéro de téléphone</td>
            <td>Status Marital</td>
            <?php foreach ($credit as $key => $value): ?>
                <?php if ($value->userId == $user->id): ?>
                    <td>Organisme</td>
                    <td>Montant</td>
                <?php endif ?>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$user->lastName;?></td>
            <td><?=$user->firstName;?></td>
            <td><?=$user->birthDate;?></td>
            <td><?=$user->adressComplete;?></td>
            <td><?=$user->phoneNumber;?></td>
            <td><?=$user->status;?></td>
            <?php foreach ($credit as $key => $value): ?>
                <?php if ($value->userId == $user->id): ?>
                    <td><?=$value->society?></td>
                    <td><?=$value->amount?></td>
                <?php endif ?>
            <?php endforeach ?>
        </tr>    
    </tbody>
</table> 