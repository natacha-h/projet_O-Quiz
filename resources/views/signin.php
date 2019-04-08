<?php
    include __DIR__.'/layout/header.php';
?>
            <div>
                <h2> Connectez-vous </h2>

            </div>

            <?php if(!empty($errorList)) : ?>
                <section id="erreurs" class="alert alert-danger">
                    <?php foreach($errorList as $currentError): ?>
                    <p><?= $currentError ?></p>
                    <?php endforeach;?>                
                </section>
            <?php endif; ?>

            <form action="<?php route('connexion') ?>" method="POST" class="col-6">

                <section class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="exemple@e-mail.com" >

                </section>

                <section class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="mot de passe" >
                </section>

                <button type="submit" class="btn btn-info">Se connecter</button>
            </form>
            
        </main>

<?php
    include __DIR__.'/layout/footer.php';
?>