<?php

$api_url = 'https://api.quotable.io/random';
$quote = json_decode(file_get_contents($api_url));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Inspirational Quote</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="quote">
        <?php 
        echo $quote->content; 
        ?>
    </div>
    <div class="author">
         By-
         <?php 
         echo $quote->author; 
         ?>
         </div>
    <form method="post">
        <button type="submit" class="button">New Quote</button>
    </form>
</body>

</html>