<?php
    //dump($inputValues);
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

<?php if(!empty($score)) : ?>
    <section id="score">
        <p><?= $score?> bonnes réponses</p>
    </section>
<?php endif;?>    

</section>
<?php if ($user) : ?>
        <form action="" method="post">

            <div class="row">
                <?php foreach($questions as $currentQuestion): ?>

                    <article class="card m-2">
                        <div class="card-body">
                            <span class="level level--<?= $currentQuestion->level->getCssClass()?>"><?= $currentQuestion->level->name?></span>

                            <div class="question__question"><?= $currentQuestion->question ?></div>

                            <ul>
                                <?php foreach($currentQuestion->answer as $currentAnswer): ?>
                                <?php if($inputValues[$currentQuestion->id] == $currentAnswer->id && ($currentQuestion->id == $currentAnswer->id )):?>
                                <div>
                                    <input type="radio" name="reponses<?=$currentQuestion->id?>" id="reponse <?=$currentAnswer->id?>" value=<?=$currentAnswer->id?> checked>
                                        <label for="reponse <?=$currentAnswer->id?>" class="correct_answer">
                                                <?= $currentAnswer->description ?>
                                        </label> 
                                </div>
                                <?php elseif ($inputValues[$currentQuestion->id] == $currentAnswer->id && ($currentQuestion->id != $currentAnswer->id )): ?>
                                <div>
                                    <input type="radio" name="reponses<?=$currentQuestion->id?>" id="reponse <?=$currentAnswer->id?>" value=<?=$currentAnswer->id?> checked>
                                        <label for="reponse <?=$currentAnswer->id?>" class="wrong_answer">
                                                <?= $currentAnswer->description ?>
                                        </label> 
                                </div>
                                <?php else: ?>
                                <div>
                                    <input type="radio" name="reponses<?=$currentQuestion->id?>" id="reponse <?=$currentAnswer->id?>" value=<?=$currentAnswer->id?>>
                                        <label for="reponse <?=$currentAnswer->id?>">
                                                <?= $currentAnswer->description ?>
                                        </label> 
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul> 

                        </div>
                    </article>                
                <?php endforeach; ?> 
            </div>
        </form>

<?php else: ?>


<?php endif; ?>

</main>
