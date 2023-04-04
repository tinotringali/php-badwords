<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="index_badwords.php" method="GET">
            <div>
                <label for="paragraph">Paragraph</label>
                <textarea name="paragraph" cols="50" rows="2"></textarea>
            </div>
            <div>
                <label for="badword">Censored word</label>
                <input type="text" name="badword" placeholder="Censored word..">
            </div>
            <button type="submit">Send</button>
        </form>
    </main>
</body>
</html>