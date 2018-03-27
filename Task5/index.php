<?php require_once 'Bowling.php'?>
<?php require_once 'htmlform.php' ?>

<h1>Task #5</h1>
<form action="index.php" method="post">
    <label for="submit">
        Click to run
    </label>
    <input type="submit" name="submit" value="Simulate">
</form>
<br>

<?php if(isset($_POST['submit'])){
    $Player1 = new Bowling();
    $Player2 = new Bowling();

    echo 'Player 1:<br>';
    $Player1->generate();
    $Player1->removePlaceholder();
    echo $score1 = $Player1->getScore();
    echo '<br><br>';

    echo 'Player 2:<br>';
    $Player2->generate();
    $Player2->removePlaceholder();
    echo $score2 = $Player2->getScore();
    echo '<br><br>';

    if ($score1 > $score2){
        echo 'Player 1 wins';
    }
    elseif ($score2 > $score1){
        echo 'Player 2 wins';
    } else {
        echo 'Draw';
    }

}?>

</body>
</html>