<?php
    
?>
<section id="en-tete-quizz">
    <h2> <?= $currentQuiz->title ?> <br>
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
<?php if ($connectedUser) : ?>
        <form action="" method="post">

            <div class="row">
                <?php foreach($questions as $currentQuestion): ?>

                    <article class="card m-2">
                        <div class="card-body">
                            <span class="level level--<?= $currentQuestion->level->getCssClass()?>"><?= $currentQuestion->level->name?></span>

                            <div class="question__question"><?= $currentQuestion->question ?></div>

                            <ul>
                                <?php foreach(($currentQuestion->answer)->shuffle() as $currentAnswer):?>
                                <div>
                                    <input type="radio" name="reponses<?=$currentQuestion->id?>" id="reponse<?=$currentAnswer->id?>" value=<?=$currentAnswer->id?>>
                                        <label for="reponse<?=$currentAnswer->id?>">
                                                <?= $currentAnswer->description ?>
                                        </label> 
                                </div>
                                <?php endforeach; ?>
                            </ul> 

                        </div>
                    </article>                
                <?php endforeach; ?> 
            </div>
            <button type="submit" class="btn btn-info">Soumettre le quiz</button>
        </form>

<?php else: ?>

<p class="alert alert-warning">Vous devez être connecté pour pouvoir répondre au quiz</p>
<div class="row">
    <?php foreach($questions as $currentQuestion): ?>

    <article class="card m-2">
        <div class="card-body">
            <span class="level level--<?= $currentQuestion->level->getCssClass()?>"><?= $currentQuestion->level->name?></span>

            <div class="question__question"><?= $currentQuestion->question ?></div>

            <ul>
                <?php 
                foreach($currentQuestion->answer as $currentAnswer): ?>
                <li><?=  $currentAnswer->description ?> </li>
                <?php endforeach; ?>
            </ul> 

        </div>
    </article>
    <?php endforeach; ?>   
</div>

<?php endif; ?>

</main>
