<?php
require_once '../classes/Session.php';
Session::init();
require_once '../config/config.php';
require_once '../classes/Database.php';
require_once '../classes/Format.php';

$db = new Database();
$fm = new Format();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../libs/materialize/css/materialize.css">
</head>
<body>
<main class="valign-wrapper wrap-login-panel">
    <div class="login-panel">
        <h5 class="center-align">Вход для администратора</h5>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $username = $fm->validation($_POST['username']);
                        $password = $fm->validation(md5($_POST['password']));

                        $username = mysqli_real_escape_string($db->connectDB(), $username);
                        $password = mysqli_real_escape_string($db->connectDB(), $password);

                        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                        $result = $db->runQuery($sql);

                        if ($result != false) {
                            Session::set("login", true);
                            Session::set("username", $result['username']);
                            Session::set("userId", $result['id']);
                            echo "<script>window.location = 'index.php';</script>";
                        } else {
                            echo "<span class='red-text accent-4'>Неверно введен логин или пароль !</span>";
                        }
                    }
                    ?>
                    <form method="post" action="login.php" id="image-test">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input type='text' name='username' id='login'>
                                <label for='login'>Введите логин</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input type='password' name='password' id='password'>
                                <label for='password'>Введите пароль</label>
                            </div>
                            <label style='float: right;'>
                                <a class='red-text accent-4 fogot-link' href='forgot_pass.php'><b>Забыли пароль?</b></a>
                            </label>
                        </div>
                        <div class='row'>
                            <div class="col s12 center-align">
                                <input type="submit" class="btn waves-effect red accent-4" value="Войти">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.login-panel -->
</main><!-- /.wrap-login-panel -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../libs/materialize/js/materialize.min.js"></script>
<script type="text/javascript">
    var options = [
        {
            selector: '#image-test',
            offset: 50, callback: function (el) {
            Materialize.fadeInImage($(el));
        }
        }
    ];
    Materialize.scrollFire(options);
</script>
</body>
</html>