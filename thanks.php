<?php

$fullName = htmlentities($_POST["user_fullname"]);
$address = htmlentities($_POST["user_address"]);
$phone = htmlentities($_POST["user_phone_number"]);
$monster_type = htmlentities($_POST["monster_type"]);
$monster_size = htmlentities($_POST["monster_size"]);
$message = htmlentities($_POST["user_message"]);

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($fullName) || trim($fullName) === '')
        $errors[] = "A full name is required !";
    if(empty($address) || trim($address) === '')
        $errors[] = "An address is required !";
    if(empty($phone) || trim($phone) === '')
        $errors[] = "A phone number is required !";
    if (!filter_var($phone, FILTER_VALIDATE_INT)) {
        $errors[] = "You must enter a correct phone number format";}
    if(empty($monster_type) || trim($monster_type) === '')
        $errors[] = "You have to select a monster !";
    if(empty($monster_size) || trim($monster_size) === '')
        $errors[] = "You have to select a monster size !";
    if(empty($message) || trim($message) === '')
        $errors[] = "A message is required !";
}

if (!empty($errors)) {
    require 'error.php';
    die();
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="styles/desktop.css">
    <link rel="stylesheet" type="text/css" href="styles/thanks.css">
    <title>Thanks page</title>
</head>

<body>
    <header>
    </header>

        <main>

        <div id="thanks-page">
        <section class="thanks-bloc">
            <div class="thanks-content">
                <div class="thanks-title">
                    <h2>THANKS !</h2>
                </div>

                <p>
                    Hello <?= $fullName ?>, we got your message.
                </p>
                <p>
                    You are facing a problem with a <?= $monster_size ?> <?= $monster_type ?> ! And it seems to be a big problem : <?= $message ?>
                </p>
                <p>
                    But luckily for you, I like awkward positions. Your address is : <?= $address ?>, I will call you at <?= $phone ?> when I will be around.
                </p>
                    Don't try anything stupid, just wait for me.
                </p>
                <p>
                    Geralt de Riv
                </p>

                <img src ="/assets/geralt-hot.jpeg" alt="Geralt nude taking a bath">
            </div>
        </section>

        </main>

    <div id="cta">
        <a id="hire-me" href="index.php">HOME</a>
    </div>

    <footer>
    </footer>

</body>
</html>