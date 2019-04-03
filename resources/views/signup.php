<?php
    include __DIR__.'/layout/header.php';
?>
            <div>
                <h2> Inscrivez-vous sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>
            <form action="/signup" method="POST">

                <section class="form-group">
                    <label for="firstname">Votre prénom</label>
                    <input type="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Prénom" >
                    <!-- <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre e-mail avec une tierce partie.</small> -->
                </section>

                <section class="form-group">
                    <label for="lastname">Votre nom</label>
                    <input type="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Nom" >
                    <!-- <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre e-mail avec une tierce partie.</small> -->
                </section>

                <section class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemple@e-mail.com" >
                    <!-- <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre e-mail avec une tierce partie.</small> -->
                </section>

                <section class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="mot de passe" >
                    <label for="password_verif">Répéter le mot de passe</label>
                    <input type="password" class="form-control" id="password_verif" aria-describedby="passwordHelp" placeholder="mot de passe" >
                    
                </section>

                <button type="submit" class="btn btn-info">S'inscrire</button>
            </form>
            
        </main>

<?php
    include __DIR__.'/layout/footer.php';
?>