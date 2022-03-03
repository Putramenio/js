<form action="" method="get">
    Imie:<input type="text" name="name">
    Nazwisko:<input type="text"name="surname">
    <input name="sub"type="submit" value="git">
</form>

<?php
$name=$_GET['name'];
$surname=$_GET['surname'];
echo "Witaj $name $surname";
?>