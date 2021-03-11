<?php
require_once APPROOT . "/views/includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Question <?= $data['questionNum']; ?> of <?= $data['totalQuestions'] ?></h1>
        <h2 class="question"><?= $data['question'] ?></h2>

        <!-- process answer -->
        <form action="questions" method="POST" class="answerSelect">
            <div class="answerContianer">

                <?php foreach($data['answers'] as $answer) : ?>

                <input type="radio" id="<?=$answer['answer_id'] ;?>" name="answer" value="<?=$answer['answer_id'] ;?>" class="answerRadio">
                <label for="<?=$answer['answer_id'] ;?>" class="answerLabel"><?=$answer['answer'] ;?></label>

                <?php endforeach; ?>

            </div>
            <div class="buttonContainer">
                <input type="submit" name="submit" value="Confirm" class="confirmAnswer">
            </div>
            
        </form>
    </div>

<?php
require_once APPROOT . "/views/includes/footer.inc.php";
?>