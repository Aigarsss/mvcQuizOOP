<?php
require_once APPROOT . "/views/includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Nice!</h1>
        <h2 class="question">Your resut is <?= $data['yourResult'];?>!</h2>

        <!-- process answer -->
        <form action="." method="POST" class="resultButtons">
            <input type="submit" name="submitScore" value="Submit Score" class="confirmAnswer">
            <input type="submit" name="playAgain" value="Play Again" class="confirmAnswer">
        </form>
    </div>

<?php
require_once APPROOT . "/views/includes/footer.inc.php";
?>