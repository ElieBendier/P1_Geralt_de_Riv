<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="styles/desktop.css">

    <title>Geralt De Riv's Website</title>
</head>

<body>
    <header>
    </header>

    <main>
        <div id="home-page">

            <div class="button my-story">
                <div class="button-logo">
                    <a href="#my-story"></a>
                </div>
                <div class="button-title">
                    <a href="#my-story">My Story</a>
                </div>
            </div>
            <div class="button armory">
                <div class="button-logo">
                    <a href="#armory"></a>
                </div>
                <div class="button-title">
                    <a href="#armory">Armory</a>
                </div>
            </div>

            <div class="geralt-main">
                <div class="geralt-pic"></div>
            </div>
            <h1 class="geralt-name">Geralt De Riv</h1>

            <div class="button skills">
                <div class="button-logo">
                    <a href="#skills"></a>
                </div>
                <div class="button-title">
                    <a href="#skills">Skills</a>
                </div>
            </div>
            <div class="button graveyard">
                <div class="button-logo">
                    <a href="#graveyard"></a>
                </div>
                <div class="button-title">
                    <a href="#graveyard">Graveyard</a>
                </div>
            </div>
        </div>

        <?php
        include "section.php";
        include "form.php";
        ?>

    </main>

    <div class="button back"><a href="#home-page"></a></div>

    <div id="cta">
        <a id="hire-me" href="#form-page">HIRE ME !</a>
        <button id="send" type="submit" form="hireme" value="Update">SEND !</button>
    </div>

    <footer>
    </footer>
</body>

</html>

<script>
// scroll event = 2700
const hire_button = document.getElementById("hire-me");
const send_button = document.getElementById("send")

let last_scroll_position = 0;
window.addEventListener("scroll", function (e) {
    last_scroll_position = window.scrollY;
    console.log("last_scroll_position",last_scroll_position)
    if (last_scroll_position >= 2700){
        hire_button.style.display = "none";
        send_button.style.display = "flex";
    }
    else if(last_scroll_position <= 2700){
            hire_button.style.display = "flex";
            send_button.style.display = "none";
        }

})

</script>