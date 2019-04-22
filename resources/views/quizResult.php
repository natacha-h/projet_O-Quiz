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
        <p>Vous avez <?= $score?> bonnes réponses</p>
    </section>
<?php endif;?>    

</section>
<?php if ($connectedUser) : ?>
        <form action="" method="post">

            <div class="row">
                <?php foreach($questions as $currentQuestion): //dump($currentQuestion); ?>

                    <article class="card m-2">
                        <div class="card-body">
                            <span class="level level--<?= $currentQuestion->level->getCssClass()?>"><?= $currentQuestion->level->name?></span>

                            <div class="question__question"><?= $currentQuestion->question ?></div>

                            <ul>
                                <?php foreach($currentQuestion->answer as $currentAnswer): ?>
                                    <!-- si la réponse est correcte on lui applique le style correct_answer -->
                                    <?php if($inputValues[$currentQuestion->id] == $currentAnswer->id && ($currentQuestion->id == $currentAnswer->id )):?>
                                        <li class="correct_answer">                                        
                                    <!-- sinon si la réponse est fausse on lui applique le style wrong_answer -->
                                    <?php elseif ($inputValues[$currentQuestion->id] == $currentAnswer->id && ($currentQuestion->id != $currentAnswer->id )): ?>
                                        <li class="wrong_answer">  
                                    <!-- on indique en vert la bonne réponse -->
                                    <?php elseif ($currentQuestion->id == $currentAnswer->id ): ?>
                                        <li style="color: green;">
                                    <?php else: ?>
                                        <li>
                                    <?php endif; ?>
                                            <?= $currentAnswer->description ?>                                                
                                        </li>
                                <?php endforeach; ?>
                            </ul> 
                                    
                            <!-- on affiche l'information sur le sujet -->
                            <p>
                                Le saviez-vous ? : <br>
                                <?=$currentQuestion->anecdote?>
                            </p>
                        </div>
                    </article>                
                <?php endforeach; ?> 
            </div>
        </form>

<?php else: ?>


<?php endif; ?>

</main>
