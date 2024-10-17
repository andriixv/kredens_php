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
                    
                    <form action="">
                        <input type="text" name="login" id="login" placeholder="Логін">
                        <input type="text" name="password" id="password" placeholder="Пароль">
                        <label><input type="checkbox" name="stay-loggedIn"> Залишатися в системі</label>
                        <button id="login-button" class="btn">Увійти</button>
                    </form>

                    <div class="socials-container">
                        <a href="#" class="social"><img src="icons/google.svg"></img> Увійти з Google</a>
                        <!-- <a href="#" class="social"><img src="icons/facebook.svg"></img> Увійти з Facebook</a> -->
                    </div>
            </div>
            
    </section>
    
    <?php include 'include-footer.php';?>
    <script src="index.js"></script>
</body>
</html>