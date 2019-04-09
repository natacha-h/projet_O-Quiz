
            <div>
                <h2> Inscrivez-vous sur O'Quiz </h2>
                
            </div>
            <?php if(!empty($errorList)) : ?>
                <section id="erreurs" class="alert alert-danger">
                    <?php foreach($errorList as $currentError): ?>
                    <p><?= $currentError ?></p>
                    <?php endforeach;?>                
                </section>
            <?php endif; ?>

            <form action="<?php route('inscription-post') ?>" method="POST" class="container">
                
            <div class="row">

                    <section class="form-group col-md" >
                        <label for="firstname">Votre prénom</label>
                        <input type="firstname" class="form-control" id="firstname" name="firstname"aria-describedby="firstnameHelp" placeholder="Prénom" value="<?=$inputValues['firstname'] ?>">
                
                    </section>

                    <section class="form-group col-md">
                        <label for="lastname">Votre nom</label>
                        <input type="lastname" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp" placeholder="Nom" value="<?= $inputValues['lastname'] ?>">
                        
                    </section>
                </div>

                <div class="row">

                    <section class="form-group col-md">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="exemple@e-mail.com" value="<?= $inputValues['email']?>" >
                        
                    </section>
    
                    <section class="form-group col-md">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="mot de passe" ><br>
                        <label for="password_verif">Répéter le mot de passe</label>
                        <input type="password" class="form-control" id="password_verif" name="password_verif" aria-describedby="passwordHelp" placeholder="mot de passe" >
                        
                    </section>
                </div>



                <button type="submit" class="btn btn-light">S'inscrire</button>
            </form>
            
        </main>
