<!-- Assignment 2 Loops -> start -->

<form method = "POST">
<label>Which math table do you want to print...Enter number here?</label>
<input type = "text" name = "table">
<input type="submit" value="Print Table">
</form>

<?php


if(isset($_POST['table']))
{
    $table = $_POST['table'];

// // using for Loop
    echo "Using for Loop <br/>";
    for($num = 1; $num <= 10; $num++)
    {
        $print = $table . "X" . $num . "=" . ($table * $num);
        echo "$print </br>";
    }

// // End for Loop


// // using while loop
    echo "Using while Loop <br/>";
    $num = 1;
    while ($num <=10)
    {
        $print = $table . "X" . $num . "=" . ($table * $num);
        echo "$print </br>";
        $num++;
    }

// // End while Loop

}

?>
<!-- Assignment 2 end -->