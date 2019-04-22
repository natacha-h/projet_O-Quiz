
            <section id="intro">
                <h2> <?= $currentTag->name ?></h2>
            </section>

            <section id="display-quiz" class="row justify-content-between">

            <?php foreach($currentTag->quiz as $quiz): ?>
                <article class="card m-2" >
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?= route('quiz', ['id' => $quiz->id]) ?>"><?=$quiz->title ?></a></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$quiz->description ?></h6>
                            <p class="card-text">by <?=$quiz->app_users_id ?></p>
                        </div>
                    </article>
            <?php endforeach; ?>
            </section>
            
        </main>

