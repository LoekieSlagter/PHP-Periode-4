<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 10.2</title>
</head>
<body>

    <h1>Welkom op ons NewsFeed</h1>

    <?php
    $username = $_POST["usernamevak"];
    $password = $_POST["passwordvak"];

    require_once  "Olifant_connect.php";

    $users = $conn->prepare("
                                select post_id,
                                       username, 
                                       berichten
                                from   newsfeed
                                where  username = :username                                   
                              ");

    $users->execute([":username" => $username]);

    foreach($users as $user)
    {
        echo "<table>";

        echo "<tr>";
        echo "<td>" . $user["post_id"] . "</td>";
        echo "<td>" . $user["username"] . "</td>";
        echo "<td>" . $user["berichten"] . "</td>";

        echo "</tr>";

        echo "</table><br />";
    }

    ?>

    <form action="Opdracht_10.3.php" method="post">

    post_id:    <input type="text" name="bericht_id" placeholder="Voer hier uw post_id in.">
    <input type="submit">

    </form>

</body>
</html>