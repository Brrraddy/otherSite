<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Feedback about us";
    require_once "blocks/head.php";
    ?>
</head>

<body>
    <?php require_once "blocks/header.php" ?>
        <div id="wrapper">
            <div id="leftCol">
                <input type="text" placeholder="Name" id="name" name="name"><br />
                <input type="text" placeholder="Email" id="email" name="email"><br />
                <input type="text" placeholder="Your message" id="subject" name="subject"><br />
                <textarea name="message" id="message"></textarea><br />
                <input type="button" name="done" id="done" value="Send">
            </div>
            <?php require_once "blocks/rightCol.php" ?>
        </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>