<html>

<?php
$fullName = $_POST["user_fullname"];
$address = $_POST["user_address"];
$phone = $_POST["user_phone_number"];
$monster_type = $_POST["monster_type"];
$monster_size = $_POST["monster_size"];
$message = $_POST["user_message"];
?>

    <head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/thanks.css">
    <title>Thanks page</title>
    </head>
    <body>
    <div id="thanks-page">
    <section class="thanks-bloc">
        <div class="thanks-content">
            <div class="thanks-title">
                <h2>THANKS !</h2>
            </div>
            <div>
            <p>
    Hello <?= $fullName ?>, we got your message. </br>
</br>
    You are facing a problem with a <?= $monster_size ?> <?= $monster_type ?> ! And it seems to be a big problem : <?= $message ?> </br>
</br>
    But luckily for you, I like awkward positions. Your address is : <?= $address ?>, I will call you at <?= $phone ?> when I will be around. </br>
</br>
    Don't try anything stupid, just wait for me.</br>
</br>
Geralt de Riv

        <img src ="/assets/geralt-hot.jpeg" alt="Geralt nude taking a bath">
            </p>
            </div>

</div>
<a href="index.php">COME BACK TO HOME</a>    
</div>
    </body>
</html>