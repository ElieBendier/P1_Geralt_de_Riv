<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 1200px)" href="../styles/desktop.css">

    <title>Geralt De Riv's Website</title>
</head>

<body>
    <header>
    </header>

    <main>
        <div id="home-page">

            <div class="button my-story home">
                <div class="button-logo">
                    <a href="#my-story"></a>
                </div>
                <div class="button-title">
                    <a href="#my-story">My Story</a>
                </div>
            </div>
            <div class="button armory home">
                <div class="button-logo">
                    <a href="#armory"></a>
                </div>
                <div class="button-title">
                    <a href="#armory">Armory</a>
                </div>
            </div>

            <div class="geralt-main-pic home"></div>
            <div class="geralt-name home">
                <h1>Geralt De Riv</h1>
            </div>

            <div class="button skills home">
                <div class="button-logo">
                    <a href="#skills"></a>
                </div>
                <div class="button-title">
                    <a href="#skills">Skills</a>
                </div>
            </div>
            <div class="button graveyard home">
                <div class="button-logo">
                    <a href="#graveyard"></a>
                </div>
                <div class="button-title">
                    <a href="#graveyard">Graveyard</a>
                </div>
            </div>

        </div>

        <div class="button back"><a href="#home-page"></a></div>

        <?php
        include "section.php";
        include "form.php";
        ?>

        <div id="cta">
            HIRE ME !
        </div>
    </main>

    <footer>
    </footer>
</body>

</html>