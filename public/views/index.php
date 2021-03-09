<?php
require_once "includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Welcome Stranger!</h1>
        <h2 class="question">Are you ready for some questions? Select a quiz and test yourself</h2>

        <form action="questions.php" method="POST" class="formSelect">
            <select name="quizSelect" id="quizSelect" class="quizSelect">
                <!-- <option disabled selected value></option> -->

                <?php $tmp = ["first item", "second item"]; ?>

                <?php foreach ($tmp as $key => $item): ?>
                <option value="<?= $item;?>">
                    <?= $item;?>
                </option>
                <?php endforeach; ?>

            </select>
            <input type="submit" name="submit" value="GO" class="submit">
        </form>
    </div>

<?php
require_once "includes/footer.inc.php";
?>