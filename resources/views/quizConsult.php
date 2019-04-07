<?php
    include __DIR__.'/layout/header.php';
    //dump($taglist);
?>
<section id="en-tete-quizz">
    <h2> <?= $currentQuiz->title ?>
        <span><?= count($questions) ?> questions</span>
    </h2>
                       
    <h4> 
    <?= $currentQuiz->description ?>
    </h4>
            
    <section id="tags-display" class="d-flex flex-row" >
        <?php foreach($currentQuiz->tags as $currentTag): ?>
        <a href="<?= route('quiz-par-sujet', ['id' => $currentTag->id]) ?>">
            <h6 class="tag"><?= $currentTag->name?></h6>
        </a>
        <?php endforeach; ?>
    </section >
            
    <p>by <?= $currentQuiz->author->firstname?> <?= $currentQuiz->author->lastname?></p>
           
</section>

<div class="row">
    <?php foreach($questions as $currentQuestion): ?>

    <article class="card m-2">
        <div class="card-body">
            <span class="level level--<?= $currentQuestion->level->getCssClass()?>"><?= $currentQuestion->level->name?></span>

            <div class="question__question"><?= $currentQuestion->question ?></div>

            <ul>
                <?php //$currentAnswerList = $answers[$currentQuestion->id]; 
                foreach($currentQuestion->answer as $currentAnswer): ?>
                <li><?=  $currentAnswer->description ?> </li>
                <?php endforeach; ?>
            </ul> 

        </div>
    </article>
    <?php endforeach; ?>   
</div>

</main>

<?php
    include __DIR__.'/layout/footer.php';
?>