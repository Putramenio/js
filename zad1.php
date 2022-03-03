<meta charset="UTF-8">
<form method="POST" action="">
    <input name="imie"><input><br>
    <input name="nazwisko"><input><br>
    <button type="submit" name="wyslij">wyslij</button>
</form>

<?php
if (isset($_POST["wyslij"])){
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    echo"Witaj" $imie $nazwisko"</br>;
}
