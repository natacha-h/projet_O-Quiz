<?php
    include __DIR__.'/layout/header.php';
?>
            <section id="intro">
                <h2> Les différents sujets </h2>
            </section>

            <section class="row justify-content-between">
                <?php foreach($tags as $currentTag) : ?>
                    <article>
                       <a href="<?= route('quiz-par-sujet', ['id' => $currentTag->id]) ?>">
                       <h5 class="tag"><?= $currentTag->name ?></h5>
                           </a> 
                    </article>
                <?php endforeach; ?>
            </section>
        </main>

<?php
    include __DIR__.'/layout/footer.php';
?>