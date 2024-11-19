<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Kaydol</h1>
        <form method="post" action="giris.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="Ad" required>
                <label for="fname">Ad</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Soyad" required>
                <label for="lName">Soyad</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="E-Posta" required>
                <label for="email">E-Posta</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Şifre" required>
                <label for="password">Şifre</label>
            </div>
            <input type="submit" class="btn" value="Kaydol" name="signUp">
        </form>
        <p class="or">
            ----------ya da--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Zaten hesabınız var mı?</p>
            <button id="signInButton">Giriş yap</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Oturum aç</h1>
        <form method="post" action="giris.php">
            <div class="input-group">
            <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="E-Posta" required>
                <label for="email">E-Posta</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Şifre" required>
                <label for="password">Şifre</label>
            </div>
            <div class="recover">
                <a href="#">Şifreyi kurtar</a>
            </div>
            <input type="submit" class="btn" value="Giriş yap" name="signIn">
        </form>
        <p class="or">
            ----------ya da--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Henüz hesabınız yok mu?</p>
            <button id="signUpButton">Kaydolun</button>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>