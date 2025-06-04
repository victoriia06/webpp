<?php
session_start();

// Проверяем, откуда пришел запрос (из формы пользователя или админа)
$isAdminLogin = isset($_POST['admin_login']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $db = new PDO("mysql:host=localhost;dbname=ваша_база", 'ваш_пользователь', 'ваш_пароль');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($isAdminLogin) {
            // Проверка для администратора
            $stmt = $db->prepare("SELECT * FROM admins WHERE login = ?");
            $stmt->execute([$_POST['login']]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($_POST['pass'], $user['password'])) {
                $_SESSION['admin'] = true;
                $_SESSION['login'] = $user['login'];
                $_SESSION['user_id'] = $user['id'];
                header('Location: admin.php');
                exit();
            }
        } else {
            // Проверка для обычного пользователя
            $stmt = $db->prepare("SELECT * FROM p_users WHERE login = ?");
            $stmt->execute([$_POST['login']]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($_POST['pass'], $user['password'])) {
                $_SESSION['admin'] = false;
                $_SESSION['login'] = $user['login'];
                $_SESSION['user_id'] = $user['id'];
                header('Location: profile.php');
                exit();
            }
        }
        
        // Если не удалось авторизоваться
        $error = 'Неверный логин или пароль';
        
    } catch (PDOException $e) {
        $error = 'Ошибка базы данных: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .login-tabs {
            display: flex;
            margin-bottom: 20px;
        }
        .login-tab {
            flex: 1;
            text-align: center;
            padding: 10px;
            cursor: pointer;
            border-bottom: 2px solid #ddd;
        }
        .login-tab.active {
            border-bottom: 2px solid #f14d34;
            font-weight: bold;
        }
        .login-form {
            display: none;
        }
        .login-form.active {
            display: block;
        }
        .error {
            color: #f14d34;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-tabs">
            <div class="login-tab active" data-tab="user">Пользователь</div>
            <div class="login-tab" data-tab="admin">Администратор</div>
        </div>
        
        <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        
        <!-- Форма для пользователей -->
        <form method="POST" class="login-form active" id="user-form">
            <input class="input" type="text" name="login" placeholder="Логин" required>
            <input class="input" type="password" name="pass" placeholder="Пароль" required>
            <button class="footer__btn btn__reset" type="submit">ВОЙТИ</button>
        </form>
        
        <!-- Форма для администраторов -->
        <form method="POST" class="login-form" id="admin-form">
            <input class="input" type="text" name="login" placeholder="Логин администратора" required>
            <input class="input" type="password" name="pass" placeholder="Пароль" required>
            <input type="hidden" name="admin_login" value="1">
            <button class="footer__btn btn__reset" type="submit">ВОЙТИ КАК АДМИНИСТРАТОР</button>
        </form>
    </div>

    <script>
        // Переключение между вкладками
        document.querySelectorAll('.login-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.login-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.login-form').forEach(f => f.classList.remove('active'));
                
                this.classList.add('active');
                document.getElementById(this.dataset.tab + '-form').classList.add('active');
            });
        });
    </script>
</body>
</html>