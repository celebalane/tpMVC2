 <?php
 	if (isset($_POST["name"])) {
 		App::getInstance()->getTable('Customer')->create($_POST);
 		header('location: index.php?p=Clients');
 		exit();
 	}
 ?>
<h1>Ajouter un client</h1>

<form action="" method="POST">
    <input type="text" name="lastName" placeholder="Nom" required/>
    <input type="text" name="firstName" placeholder="Prénom" required/>
    <input type="date" name="birthDate" placeholder="Date de naissance" required/>
    <input type="number" name="phoneNumber" placeholder="Numéro de téléphone" required/>
    <input type="text" name="adress" placeholder="adresse" required/>
    <input type="number" name="zipCode" placeholder="Code Postal" required/>
    <select name="maritalStatus" required>
        <option value="">Situation</option>
        <?php foreach (App::getInstance()->getTable('maritalStatus')->getStatut() as $value): ?>
            <option value="<?= $value->id ?>"><?= $value->status?></option>
        <?php endforeach ?>
    </select>
    <input type="submit" value="Envoyer"/>
</form> 