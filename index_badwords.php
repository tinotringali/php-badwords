<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index badwords php</title>
</head>
<body>
    
    <?php
    $paragraph = $_GET["paragraph"];
    $badword = $_GET["badword"];
    $censored = str_replace($badword, '***', $paragraph);
    ?>

    <div>
        <p><?php echo $paragraph ?></p>
        <div>La lunghezza del paragrafo è di <?php echo strlen($paragraph); ?> caratteri.</div>
    </div>
    <div>
        <p>Paragrafo censurato:<?php echo $censored; ?></p>
        <div class="length"><?php echo strlen($censored); ?></div>
    </div>

</body>

</html>