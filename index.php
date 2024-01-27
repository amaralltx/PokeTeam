<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/pokedex-icon.ico">
    <title>Pokémon Team Builder</title>
    <link rel="stylesheet" href="styles/index/index.css">
</head>

<body>
    <header class="header">
        <img class="github-logo" src="assets/images/github-mark-white.png" alt="" srcset="">
        <div class="account-btns">
            <form action="signin.php">
                <input type="submit" class="signin-btn" value="Sign In">
            </form>
            <form action="signup.php">
                <input type="submit" class="signup-btn" value="Sign Up">
            </form>
        </div>
    </header>
    <div class="main-content">
        <main class="main-right">

            <div class="main-right-top">
                <input type="text" name="pkm-identifier" class="pkm-identifier" id="pkm-identifier"
                    placeholder="Enter a pokémon name or number..." autocomplete="off">

                <!-- <img src="assets/images/save-icon.svg" alt="" srcset="" class="save-icon"> -->
            </div>

            <div id="team_card" class="team-card">
                <div id="pkm_card1" class="pkm-card" data-filled="false">
                    <div class="pkm-sprite-box">
                        <img src="./assets/images/pokeball-bg.svg" alt="" class="pkm-sprite" id="pkm-img-1">
                    </div>
                    <div class="pkm-details" id="pkm-details-1">
                        <div class="pkm-details-left">
                            <img src="assets/type_icons/fire.svg" id="pkm-details-1-left-type" class="pkm-type-fire"
                                alt="" srcset="">
                        </div>
                        <div class="pkm-details-mid">
                            <div id="pkm-details-name-1" class="pkm-details-name">

                            </div>
                            <div id="pkm-details-number-1" class="pkm-details-number">

                            </div>
                        </div>
                        <div class="pkm-details-right">
                            <img src="assets/type_icons/psychic.svg" id="pkm-details-1-right-type"
                                class="pkm-type-psychic" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div id="pkm_card2" class="pkm-card" data-filled="false">
                    <div class="pkm-sprite-box">
                        <img src="./assets/images/pokeball-bg.svg" alt="" class="pkm-sprite" id="pkm-img-2">
                    </div>
                    <div class="pkm-details" id="pkm-details-2">
                        <div class="pkm-details-left">
                            <img src="assets/type_icons/fire.svg" id="pkm-details-2-left-type" class="pkm-type-fire"
                                alt="" srcset="">
                        </div>
                        <div class="pkm-details-mid">
                            <div id="pkm-details-name-2" class="pkm-details-name">

                            </div>
                            <div id="pkm-details-number-2" class="pkm-details-number">

                            </div>
                        </div>
                        <div class="pkm-details-right">
                            <img src="assets/type_icons/psychic.svg" id="pkm-details-2-right-type"
                                class="pkm-type-psychic" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div id="pkm_card3" class="pkm-card" data-filled="false">
                    <div class="pkm-sprite-box">
                        <img src="./assets/images/pokeball-bg.svg" alt="" class="pkm-sprite" id="pkm-img-3">
                    </div>
                    <div class="pkm-details" id="pkm-details-3">
                        <div class="pkm-details-left">
                            <img src="assets/type_icons/fire.svg" id="pkm-details-3-left-type" class="pkm-type-fire"
                                alt="" srcset="">
                        </div>
                        <div class="pkm-details-mid">
                            <div id="pkm-details-name-3" class="pkm-details-name">

                            </div>
                            <div id="pkm-details-number-3" class="pkm-details-number">

                            </div>
                        </div>
                        <div class="pkm-details-right">
                            <img src="assets/type_icons/psychic.svg" id="pkm-details-3-right-type"
                                class="pkm-type-psychic" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div id="pkm_card4" class="pkm-card" data-filled="false">
                    <div class="pkm-sprite-box">
                        <img src="./assets/images/pokeball-bg.svg" alt="" class="pkm-sprite" id="pkm-img-4">
                    </div>
                    <div class="pkm-details" id="pkm-details-4">
                        <div class="pkm-details-left">
                            <img src="assets/type_icons/fire.svg" id="pkm-details-4-left-type" class="pkm-type-fire"
                                alt="" srcset="">
                        </div>
                        <div class="pkm-details-mid">
                            <div id="pkm-details-name-4" class="pkm-details-name">

                            </div>
                            <div id="pkm-details-number-4" class="pkm-details-number">

                            </div>
                        </div>
                        <div class="pkm-details-right">
                            <img src="assets/type_icons/psychic.svg" id="pkm-details-4-right-type"
                                class="pkm-type-psychic" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div id="pkm_card5" class="pkm-card" data-filled="false">
                    <div class="pkm-sprite-box">
                        <img src="./assets/images/pokeball-bg.svg" alt="" class="pkm-sprite" id="pkm-img-5">
                    </div>
                    <div class="pkm-details" id="pkm-details-5">
                        <div class="pkm-details-left">
                            <img src="assets/type_icons/fire.svg" id="pkm-details-5-left-type" class="pkm-type-fire"
                                alt="" srcset="">
                        </div>
                        <div class="pkm-details-mid">
                            <div id="pkm-details-name-5" class="pkm-details-name">

                            </div>
                            <div id="pkm-details-number-5" class="pkm-details-number">

                            </div>
                        </div>
                        <div class="pkm-details-right">
                            <img src="assets/type_icons/psychic.svg" id="pkm-details-5-right-type"
                                class="pkm-type-psychic" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div id="pkm_card6" class="pkm-card" data-filled="false">
                    <div class="pkm-sprite-box">
                        <img src="./assets/images/pokeball-bg.svg" alt="" class="pkm-sprite" id="pkm-img-6">
                    </div>
                    <div class="pkm-details" id="pkm-details-6">
                        <div class="pkm-details-left">
                            <img src="assets/type_icons/fire.svg" id="pkm-details-6-left-type" class="pkm-type-fire"
                                alt="" srcset="">
                        </div>
                        <div class="pkm-details-mid">
                            <div id="pkm-details-name-6" class="pkm-details-name">

                            </div>
                            <div id="pkm-details-number-6" class="pkm-details-number">

                            </div>
                        </div>
                        <div class="pkm-details-right">
                            <img src="assets/type_icons/psychic.svg" id="pkm-details-6-right-type"
                                class="pkm-type-psychic" alt="" srcset="">
                        </div>
                    </div>
                </div>

            </div>

        </main>
        <aside class="main-left">
        </aside>
    </div>
    <footer class="footer">
        <a href="http://github.com/amarall.tx"></a>
    </footer>

    <script type="module" src="src/index.mjs"></script>
    <script type="module" src="src/delete_pkm.mjs"></script>
</body>

</html>