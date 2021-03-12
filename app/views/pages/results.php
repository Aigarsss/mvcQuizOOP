<?php
require_once APPROOT . "/views/includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Nice <?= $data['playerName'];?>!</h1>
        <h2 class="question">Your result is <?= $data['yourResult'];?>!</h2>

        <!-- process answer -->
        <form action="/pages/resultstable" method="POST" class="resultButton">
            <input type="submit" name="submitScore" value="Submit Score" class="confirmAnswer">
        </form>
        <a href="." class="playAgain">Play again!</a>
    </div>

<?php
require_once APPROOT . "/views/includes/footer.inc.php";
?>