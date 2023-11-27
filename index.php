<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>documento di partenza</title>
</head>
<body>
    <form action="./response.php" method="post">
        <label for="paragraph">Paragrafo con input da gestire</label> <br>
        <textarea name="paragraph" id="paragraph" cols="30" rows="4"></textarea> 

        <br><br>

        <label for="wordtoCensor">Parola da censurare</label><br>
        <input type="text" id="wordToCensor" name="wordToCensor">

        <input type="submit" value="invia">
    </form>
</body>
</html>