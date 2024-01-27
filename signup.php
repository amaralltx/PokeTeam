<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/signup/singup.css">
    <link rel="icon" type="image/x-icon" href="assets/images/pokedex-icon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Pokémon Team Builder - Sign In </title>
</head>
<body>
    <form action="" class="main-form">
        <div class="box-top">
            <img src="assets/images/poke_ball_icon.png" alt="" srcset="">
            <h2>Create account!</h2>

        </div>
        <div class="input-box">
            <label for="name">Name</label>
            <div>
                <input class="register-input" type="text" name="name" id="register_name">`
                <span class="material-symbols-outlined">
                    person
                </span>
            </div>
        </div>
        <div class="input-box">
            <label for="email">E-mail</label>
            <div>
                <input class="register-input" type="email" name="email" id="register_email">`
                <span style="transform: scale(0.9); margin-right: 5px" class="material-symbols-outlined">
                    mail
                </span>
            </div>
        </div>
        <div class="input-box">
            <label for="email">Password</label>
            <div>
                <input class="register-input" type="password" name="password" id="register_password">`
                <span class="material-symbols-outlined">
                    lock
                </span>
            </div>
        </div>
        <div class="box-bottom">
            <input class="sbmt-btn" type="button" value="Create  ->">
        </div>
    </form>
</body>
</html>