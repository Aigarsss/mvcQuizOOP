<?php
require_once APPROOT . "/views/includes/header.inc.php";
?>
    <div class="container">
        <h1 class="mainHeader">Results table:</h1>

        <table>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Score</th>
                <th>Test id</th>
            </tr>
            <?php foreach($data['scores'] as $score): ?>
            <tr>
                <td><?= $score['date']; ?></td>
                <td><?= $score['name']; ?></td>
                <td><?= $score['score']; ?></td>
                <td><?= $score['test_id']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>


        <a href="." class="playAgain">Play again!</a>
    </div>

<?php
require_once APPROOT . "/views/includes/footer.inc.php";
?>