<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 9.2</title>
</head>
<body>

<h1>Welkom bij ons news feed dinges</h1>

<?php

$post_idPOST  = $_POST ["post_idvak"];
$usernamePOST = $_POST ["usernamevak"];
$berichtenPOST = $_POST ["berichtenvak"];

require_once "Olifant_connect.php";

$sql = $conn->prepare("                            
                             INSERT INTO newsfeed 
                             VALUES (:post_id, :username, :berichten)
                            ");

$sql->execute([
    "post_id" => $post_idPOST,
    "username" => $usernamePOST,
    "berichten" => $berichtenPOST
]);

require_once "Opdracht_9.3.php";

?>

</body>
</html>