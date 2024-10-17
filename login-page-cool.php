<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'include-head.php';?>
</head>
<body>
    <?php include 'include-navbar.php';?>
    <?php include 'include-calendar.php';?>
  
    <section class="login-signup">
        <div class="form-container login">
                <h1>Вхід</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <form action="">
                    <input type="text" name="login" id="login" placeholder="Логін">
                    <input type="text" name="password" id="password" placeholder="Пароль">
                    <input type="submit" value="Вхід">
                </form>
        </div>
        <div class="form-container signup">
                <h1>Реєстрація</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <form action="">
                    <input type="text" name="login" id="login" placeholder="Логін">
                    <input type="email" name="email" id="email" placeholder="Електронна пошта">
                    <input type="text" name="password" id="password" placeholder="Пароль">
                    <input type="submit" value="Вхід">
                </form>
        </div>
        <div class="form-container overlay">
            <div class="overlay-panel left">
                <h1>Вітаємо!</h1>
                <H2>Створіть обліковий запис</H2>
                <button class="button-login">Увійти</button>
            </div>
            <div class="overlay-panel right">
                <h1>З поверненням!</h1>
                <h2>Увійдіть в свій обліковий запис</h2>
                <button class="button-login">Створити обліковий запис</button>
            </div>
        </div>
  </section>

    <?php include 'include-footer.php';?>
    <script src="index.js"></script>
</body>
</html>