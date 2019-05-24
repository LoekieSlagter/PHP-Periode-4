<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht_9.3.php</title>
</head>
<body>

<?php

require_once "Olifant_connect.php";

$users = $conn->prepare(" 
                                        select  
                                        post_id,
                                        username,
                                        berichten
                                        from    newsfeed
                                        ");
$users-> execute();

echo "<table>";
foreach($users as $user)
{
    echo "<tr>";
    echo "<td>" . $user["post_id"]          ."</td>";
    echo "<td>" . $user["username"]         ."</td>";
    echo "<td>" . $user["berichten"]        ."</td>";
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>