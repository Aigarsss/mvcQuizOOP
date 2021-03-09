<?php
require_once "includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Question 1 of 5</h1>
        <h2 class="question">What is your name?</h2>

        <!-- process answer -->
        <form action="." method="POST" class="answerSelect">
            <div class="answerContianer">

                <input type="radio" id="1" name="answer" value="1" class="answerRadio">
                <label for="1" class="answerLabel">1</label>

                <input type="radio" id="2" name="answer" value="2" class="answerRadio">
                <label for="2" class="answerLabel">2</label>

                <input type="radio" id="3" name="answer" value="3" class="answerRadio">
                <label for="3" class="answerLabel">3</label>

                <input type="radio" id="4" name="answer" value="4" class="answerRadio">
                <label for="4" class="answerLabel">4</label>
            </div>
            <div class="buttonContainer">
                <input type="submit" name="submit" value="Confirm" class="confirmAnswer">
            </div>
            
        </form>
    </div>

<?php
require_once "includes/footer.inc.php";
?>