<?php
    include __DIR__.'/layout/header.php';
    dump($taglist);
?>
<div>
                <h2> <?= $currentQuiz->title ?>
                    <span>xx questions</span>
                </h2>
            </div>

            <div>
                <h4> 
                <?= $currentQuiz->description ?>
                </h4>
            </div>
            <div>
                <?php foreach($taglist as $currentTag): ?>
                <h6> 
                   <?= $currentTag . ' '?>
                </h6>
                <?php endforeach; ?>
            </div>

            <div>
                <p>by <?= $currentQuiz->app_user_id ?></p>
            </div>

<div class="row">
    <?php foreach($questions as $currentQuestion): ?>
        <?php if($currentQuestion->levels_id == 1): ?>
            <div class="col question">
                <span class="level level--beginner"><?= $currentQuestion->level->name?></span>

                <div class="question__question">
                    <?= $currentQuestion->question ?>
                </div>

                <div>
                    <ul>
                        <?php $currentAnswerList = $answers[$currentQuestion->id]; ; 
                        foreach($currentAnswerList as $index=> $currentAnswer): ?>
                        <li><?= $index + 1 .' . ' . $currentAnswer->description ?> </li>
                        <?php endforeach; ?>
                        <!-- <li>3. Lorem ipsum </li>
                        <li>d. La réponse D </li> -->
                    </ul> 
                </div>
            </div>
    <?php elseif($currentQuestion->levels_id == 2): ?>

    <div class="col question">
        <span class="level level--medium"><?= $currentQuestion->level->name ?></span>
        <div class="question__question"> 
            <?= $currentQuestion->question ?>
        </div>

        <div>
            <ul>
                <?php $currentAnswerList = $answers[$currentQuestion->id]; ; 
                    foreach($currentAnswerList as $index=> $currentAnswer): ?>
                    <li><?= $index + 1 .' . ' . $currentAnswer->description ?> </li>
                <?php endforeach; ?>
            </ul> 
        </div>
    </div>


    <?php elseif($currentQuestion->levels_id == 3): ?>
        <div class="col question">
            <span class="level level--expert"><?= $currentQuestion->level->name ?></span>
            <div class="question__question">
                <?= $currentQuestion->question ?>
            </div>
            <div>
                <ul>
                    <?php $currentAnswerList = $answers[$currentQuestion->id]; ; 
                        foreach($currentAnswerList as $index=> $currentAnswer): ?>
                        <li><?= $index + 1 .' . ' . $currentAnswer->description ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <?php endforeach; ?>
</div>


<?php
    include __DIR__.'/layout/footer.php';
?>