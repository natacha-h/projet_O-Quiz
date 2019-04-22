<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= route('home') ?>">o'Quiz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= route('home') ?>">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= route('sujet') ?>">Sujets</a>
            </li>
        <?php if($connectedUser) :?>
        <li class="nav-item">
                <a class="nav-link" href="<?= route('profil') ?>">Mon compte</a>
            </li>
        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= route('connexion') ?>">Mon compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= route('inscription') ?>">S'incrire</a>
            </li>
        <?php endif; ?>
        <?php if($connectedUser) :?>
            <li class="nav-item">
                <a class="nav-link" href="<?= route('deconnexion') ?>">Déconnexion</a>
            </li>
        <?php endif; ?>
        </ul>
    </div>
</nav>
