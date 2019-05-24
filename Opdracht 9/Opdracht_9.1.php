<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 9.1</title>
</head>
<body>

<h1>Deze website is voor het inloggen</h1>
<p>Hier moet je inloggen</p>
<form action="Opdracht_9.2.php" method="post">
    <fieldset>

    username:      <input type="text" name="usernamevak"> <br />
    password:      <input type="password" name="passwordvak"> <br />

    post_id:        <input type="text" name="post_idvak" placeholder="Vul niks in!!!!">
        <p>
            NewsFeed; <br />
            <textarea rows="15" cols="70" placeholder="Voer hier uw bericht." name="berichtenvak"></textarea>
        </p>

        <input type="submit">
    </fieldset>
</form>

</body>
</html>