<?php require_once 'Results.php'?>
<?php require_once 'Runner.php'?>
<?php require_once 'htmlform.php' ?>

<h1>Task #4</h1>
<form action="index.php" method="post">
    <label for="submit">
        Click to run
    </label>
    <input type="submit" name="submit" value="Simulate">
</form>
<br>

<?php if(isset($_POST['submit'])){
    while (true){
        $resultString = "";
        $randoms = Runner::whoWins();
        if(Runner::$firstPlayerPoints < 5 && Runner::$secondPlayerPoints < 5) {
            $resultString = Runner::$firstPlayerPoints.":".Runner::$secondPlayerPoints;
            echo $resultString." ".Results::$scores["$resultString"];
            echo '</br>';
            if(strpos(Results::$scores["$resultString"], "wins") !== false){
                break;
            }
        }
        if (Runner::$firstPlayerPoints > 4 || Runner::$secondPlayerPoints > 4){
            $checker = Runner::checkIfWins(Runner::$firstPlayerPoints, Runner::$secondPlayerPoints, $randoms);
            if ($checker == 0){
                break;
            }
            if ($checker == 1){
                break;
            }
            Runner::draw(Runner::$firstPlayerPoints, Runner::$secondPlayerPoints, $randoms);
            Runner::advantageIn(Runner::$firstPlayerPoints, Runner::$secondPlayerPoints, $randoms);
        }

    }
}?>

</body>
</html>