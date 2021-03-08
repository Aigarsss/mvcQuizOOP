<?php
require_once "includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Question 1</h1>
        <h2 class="question">What is your name?</h2>

        <!-- process answer -->
        <form action="." method="POST" class="answerSelect">
            <input type="radio" id="1" name="answer" value="1">
            <label for="1">1</label><br>
            <input type="radio" id="2" name="answer" value="2">
            <label for="2">2</label><br>
            <input type="radio" id="3" name="answer" value="3">
            <label for="3">3</label>
            <input type="radio" id="4" name="answer" value="4">
            <label for="4">4</label>
        </form>
    </div>

<?php
require_once "includes/footer.inc.php";
?>