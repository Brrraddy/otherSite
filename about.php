<!DOCTYPE html>
<html>
<head>
    <?php
        $title = "Info about us";
        require_once "blocks/head.php";
    ?>
</head>

<body>
    <?php require_once "blocks/header.php" ?>
        <div id="wrapper">
            <div id="leftCol">
                <div id="about_us">
                    <h2>Info about us</h2>
                    <br>
                    <p>Given a character, or a sequence of characters, what is the most probable next character? This is the task we're training the model to perform. The input to the model will be a sequence of characters, and we train the model to predict the output—the following character at each time step.
                        Since RNNs maintain an internal state that depends on the previously seen elements, given all the characters computed until this moment, what is the next character?</p>
                </div>
            </div>
            <?php require_once "blocks/rightCol.php" ?>
        </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>