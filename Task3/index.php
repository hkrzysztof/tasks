<?php require_once 'FizzBuzz.php'?>
<?php require_once 'htmlform.php' ?>

<h1>Task #3</h1>
<form action="index.php" method="post">
    <label for="text">
        Please type a number
    </label>
    <input type="text" name="number">
    <input type="submit" name="submit" value="submit">
</form>
<br>

<?php if(isset($_POST['number']) && ($_POST['number']) >=0 && is_numeric($_POST['number'])){
    print_r(FizzBuzz::result($_POST['number']));
}?>

</body>
</html>