<?php
session_start();

// Проверка авторизации администратора
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$db = new PDO("mysql:host=localhost;dbname=u70422", 'u70422', '4545635');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Получение данных пользователя
$stmt = $db->prepare("
    SELECT 
        u.id, u.login, u.email,
        p.full_name, p.phone, p.birth_date, p.gender, p.bio
    FROM p_users u
    LEFT JOIN p_profiles p ON u.id = p.user_id
    WHERE u.id = :id
");
$stmt->execute([':id' => $_GET['id']]);
$user = $stmt->fetch();

if (!$user) {
    die('Пользователь не найден');
}

// Получение языков пользователя
$stmt = $db->prepare("
    SELECT language_id 
    FROM p_user_languages 
    WHERE user_id = :user_id
");
$stmt->execute([':user_id' => $user['id']]);
$user_languages = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

// Получение всех языков
$languages = $db->query("SELECT * FROM programming_languages")->fetchAll();

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $db->beginTransaction();

        // Обновление профиля
        $stmt = $db->prepare("
            UPDATE p_profiles SET
                full_name = :fio,
                phone = :tel,
                birth_date = :date,
                gender = :gender,
                bio = :bio
            WHERE user_id = :user_id
        ");
        $stmt->execute([
            ':fio' => $_POST['fio'],
            ':tel' => $_POST['tel'],
            ':date' => $_POST['date'],
            ':gender' => $_POST['gender'],
            ':bio' => $_POST['bio'],
            ':user_id' => $user['id']
        ]);

        // Обновление email
        $stmt = $db->prepare("UPDATE p_users SET email = :email WHERE id = :user_id");
        $stmt->execute([
            ':email' => $_POST['email'],
            ':user_id' => $user['id']
        ]);

        // Обновление языков
        $db->prepare("DELETE FROM p_user_languages WHERE user_id = :user_id")->execute([':user_id' => $user['id']]);
        
        if (!empty($_POST['plang'])) {
            $stmt = $db->prepare("INSERT INTO p_user_languages (user_id, language_id) VALUES (:user_id, :language_id)");
            foreach ($_POST['plang'] as $lang_id) {
                $stmt->execute([
                    ':user_id' => $user['id'],
                    ':language_id' => (int)$lang_id
                ]);
            }
        }

        $db->commit();
        header("Location: admin.php?success=1");
        exit();
    } catch (PDOException $e) {
        $db->rollBack();
        die('Ошибка при обновлении: ' . $e->getMessage());
    }
}
?>

<!-- HTML часть остается без изменений -->
<!-- HTML часть остается без изменений -->

<!-- HTML форма аналогична profile.php, но без кнопки выхода и с возвратом в админку -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование пользователя</title>
  <style>
        .profile-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 15px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-save {
            background: #4CAF50;
        }
        .btn-logout {
            background: #f44336;
        }
        .success-message {
            color: green;
            margin-bottom: 15px;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
        .language-option {
            margin-right: 10px;
            display: inline-block;
            margin-bottom: 5px;
        }
        .languages-container {
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="profile-form">
        <h1>Редактирование пользователя <?= htmlspecialchars($user['login']) ?></h1>
        
        <form method="POST">
            <div class="form-group">
                <label>Логин:</label>
                <input type="text" class="form-control" value="<?= htmlspecialchars($user['login']) ?>" readonly>
            </div>
            
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email'] ?? '') ?>">
            </div>
            
            <div class="form-group">
                <label>ФИО:</label>
                <input type="text" name="fio" class="form-control" value="<?= htmlspecialchars($user['full_name'] ?? '') ?>" required>
            </div>
            
            <div class="form-group">
                <label>Телефон:</label>
                <input type="tel" name="tel" class="form-control" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" required>
            </div>
            
            <div class="form-group">
                <label>Дата рождения:</label>
                <input type="date" name="date" class="form-control" value="<?= htmlspecialchars($user['birth_date'] ?? '') ?>" required>
            </div>
            
            <div class="form-group">
                <label>Пол:</label>
                <div>
                    <label class="language-option">
                        <input type="radio" name="gender" value="male" <?= ($user['gender'] ?? '') == 'male' ? 'checked' : '' ?> required> Мужской
                    </label>
                    <label class="language-option">
                        <input type="radio" name="gender" value="female" <?= ($user['gender'] ?? '') == 'female' ? 'checked' : '' ?>> Женский
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label>Любимые языки программирования:</label>
                <div class="languages-container">
                    <?php foreach ($languages as $lang): ?>
                        <label class="language-option">
                            <input type="checkbox" name="plang[]" value="<?= $lang['id'] ?>" 
                                <?= in_array($lang['id'], $user_languages) ? 'checked' : '' ?>>
                            <?= htmlspecialchars($lang['name']) ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="form-group">
                <label>Биография:</label>
                <textarea name="bio" class="form-control" rows="5"><?= htmlspecialchars($user['bio'] ?? '') ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-save">Сохранить изменения</button>
            <a href="admin.php" class="btn">Вернуться в админку</a>
        </form>
    </div>
</body>
</html>
