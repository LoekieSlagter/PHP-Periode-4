<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//$post_id   = $_POST["post_idvak"];
//$username  = $_POST["username"];
//$berichten = $_POST["berichtenvak"];

//var_dump($post_id);

require_once  "Olifant_connect.php";

$users = $conn->prepare("
                                select *
                                from   newsfeed
                                where  username = :username
                              ");

$users->execute([":username" => $username]);

//$users = $user->fetch(PDO::FETCH_ASSOC);

echo "<table>";
foreach($users as $user)
{
echo "<tr>";
echo "<td>" . $user["post_idvak"]      ."</td>";
echo "<td>" . $user["username"]     ."</td>";
echo "<td>" . $user["berichtenvak"]    ."</td>";
echo "</tr>";
}

echo "</table><br />";
echo "<form action='Opdracht_10.4.php' method='post'>";

//echo "<input type='hidden' name='post_idvak' value=$post_id>";
echo "<input type='hidden' name='username' value=$username>";
//echo "<input type='hidden' name='berichtenvak' value=$berichten>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";

echo "Verwijder dit bericht. <br />";

echo "<input type='submit'>";

echo "</form>";

?>

</body>
</html>