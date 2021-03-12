<?php
require_once APPROOT . "/views/includes/header.inc.php";
?>
    <div class="container">
        <a href="/pages/results" class="previousResults">Previous results</a>

        <h1 class="mainHeader">Welcome Stranger!</h1>
        <h2 class="question">Are you ready for some questions? Select a quiz and test yourself</h2>

        <form action="/pages/questions" method="POST" class="formSelect">
        
            <label for="playerName">Your name: </label>
            <input type="text" class="playerName" id="playerName" name = "playerName" required>

            <select name="quizSelect" id="quizSelect" class="quizSelect">
                <!-- <option disabled selected value></option> -->

                <?php foreach ($data['availableTests'] as $key => $item): ?>
                <option value="<?= $item['test_id'];?>">
                    <?= $item['test_name'];?>
                </option>
                <?php endforeach; ?>

            </select>
            <input type="submit" name="submit" value="GO" class="submit">
        </form>
    </div>

<?php
require_once APPROOT . "/views/includes/footer.inc.php";
?>