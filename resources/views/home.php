<?php
    include __DIR__.'/layout/header.php';
?>
            <div>
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>

            <section class="row justify-content-between">
                <?php foreach($quizList as $currentQuiz) : ?>
                    <article class="card m-2" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$currentQuiz->title ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$currentQuiz->description ?></h6>
                            <p class="card-text">by <?=$currentQuiz->app_users_id ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
                
                    
            </section>
        </main>

<?php
    include __DIR__.'/layout/footer.php';
?>