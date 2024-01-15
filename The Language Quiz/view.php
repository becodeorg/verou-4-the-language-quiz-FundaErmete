<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>
<body>
    <h1>Translate the word: <?php echo $game->getCurrentWord()->getFrenchWord(); ?></h1>

    <form method="post" action="">
        <label for="user_answer">Your answer:</label>
        <input type="text" id="user_answer" name="user_answer" required>
        <button type="submit">Submit</button>
    </form>

    <?php 
    if (isset($message)) {
        echo '<p>' . $message . '</p>';
    }?>
    <p>Player: <?php echo $game->getPlayer()->getName(); ?> | Score: <?php echo $game->getPlayer()->getScore(); ?></p>
</body>
</html>
