<?php
    include __DIR__.'/layout/header.php';
dump($user)
?>
<h2>Bienvenue <?= $user->firstname ?></h2>

<h4>Mes informations</h4>

<p>Mon nom : <?=$user->lastname ?></p>
<p>Mon prénom : <?=$user->firstname ?></p>
<p>Mon adresse email : <?=$user->email ?></p>


<?php
    include __DIR__.'/layout/footer.php';
?>