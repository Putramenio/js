<meta charset="UTF-8">
<from method="POST" action="">
    kwota:<input name="kwota"></input><br>
    podatek:<input name="podatek"></input>
    <button type="submit" name="licz">licz
</form>

<?php
if (isset($_POST['licz'])){
    $kwota = $_POST['kwota'];
    $podatek = $_POST['podatek'];

    $podatek =$podatek /100;
    $suma = $kwota * $podatek;

    echo"kwota netto: ".$suma;
}
?>