<?php
session_start();

// Проверяем, авторизован ли администратор
if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Подключение к базе данных
$user = 'u70422';
$pass = '4545635';
$dbname = 'u70422';

try {
    $db = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    // Обработка действий администратора
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['delete_id'])) {
            try {
                $db->beginTransaction();
                
                // 1. Удаляем связи с языками
                $stmt = $db->prepare("DELETE FROM p_user_languages WHERE user_id = ?");
                $stmt->execute([$_POST['delete_id']]);
                
                // 2. Удаляем профиль пользователя
                $stmt = $db->prepare("DELETE FROM p_profiles WHERE user_id = ?");
                $stmt->execute([$_POST['delete_id']]);
                
                // 3. Удаляем feedback пользователя
                $stmt = $db->prepare("DELETE FROM p_feedback WHERE user_id = ?");
                $stmt->execute([$_POST['delete_id']]);
                
                // 4. Удаляем самого пользователя
                $stmt = $db->prepare("DELETE FROM p_users WHERE id = ?");
                $stmt->execute([$_POST['delete_id']]);
                
                $db->commit();
                
                header("Location: admin.php");
                exit();
                
            } catch (PDOException $e) {
                $db->rollBack();
                die('Ошибка при удалении пользователя: ' . $e->getMessage());
            }
        }
    }
    
    // Получение статистики по пользователям
    $stats = $db->query("
        SELECT 
            COUNT(*) as total_users,
            SUM(gender = 'male') as male_users,
            SUM(gender = 'female') as female_users
        FROM p_profiles
    ")->fetch();
    
    // Получение статистики по языкам (обновленный запрос)
    $languages_stats = $db->query("
        SELECT 
            pl.name as language_name,
            COUNT(ul.user_id) as users_count
        FROM programming_languages pl
        LEFT JOIN p_user_languages ul ON pl.id = ul.language_id
        GROUP BY pl.name
        ORDER BY users_count DESC
    ")->fetchAll();
    
    // Получение всех пользователей с их данными
    $users = $db->query("
        SELECT 
            u.id as user_id,
            u.login,
            u.email,
            p.full_name as fio,
            p.phone as tel,
            p.birth_date,
            p.gender,
            p.bio
        FROM p_users u
        LEFT JOIN p_profiles p ON u.id = p.user_id
        ORDER BY u.id DESC
    ")->fetchAll();
    
    // Для каждого пользователя получаем его языки
    foreach ($users as &$user) {
        $stmt = $db->prepare("
            SELECT pl.name 
            FROM p_user_languages ul
            JOIN programming_languages pl ON ul.language_id = pl.id
            WHERE ul.user_id = ?
        ");
        $stmt->execute([$user['user_id']]);
        $user['languages'] = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    }
    unset($user);
    
} catch (PDOException $e) {
    die('Ошибка базы данных: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        .btn {
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-size: 14px;
            cursor: pointer;
            border: none;
        }
        .btn-edit {
            background-color: #2196F3;
        }
        .btn-delete {
            background-color: #f44336;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .stats {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .stat-card h3 {
            margin-top: 0;
            color: #333;
        }
        .language-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .language-stat {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Панель администратора</h1>
            <p>Вы вошли как: <strong><?= htmlspecialchars($_SESSION['login']) ?></strong> | <a href="logout.php">Выйти</a></p>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Общая статистика</h3>
                <p>Всего пользователей: <?= $stats['total_users'] ?></p>
                <p>Мужчин: <?= $stats['male_users'] ?></p>
                <p>Женщин: <?= $stats['female_users'] ?></p>
            </div>
            
            <div class="stat-card">
    <h3>Статистика по языкам</h3>
    <div class="language-stats">
        <?php foreach ($languages_stats as $lang): ?>
            <div class="language-stat">
                <?= htmlspecialchars($lang['language_name']) ?>: <?= $lang['users_count'] ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
        
        <h2>Все пользователи</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Логин</th>
                    <th>Email</th>
                    <th>ФИО</th>
                    <th>Телефон</th>
                    <th>Дата рождения</th>
                    <th>Пол</th>
                    <th>Языки</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): 
                    $plang = json_decode($user['plang'] ?? '[]', true);
                    $plang_display = is_array($plang) ? implode(', ', $plang) : '';
                ?>
                <tr>
                    <td><?= htmlspecialchars($user['user_id']) ?></td>
                    <td><?= htmlspecialchars($user['login']) ?></td>
                    <td><?= htmlspecialchars($user['email'] ?? '') ?></td>
                    <td><?= htmlspecialchars($user['fio'] ?? '') ?></td>
                    <td><?= htmlspecialchars($user['tel'] ?? '') ?></td>
                    <td><?= htmlspecialchars($user['birth_date'] ?? '') ?></td>
                    <td><?= $user['gender'] == 'male' ? 'Мужской' : ($user['gender'] == 'female' ? 'Женский' : '') ?></td>
                    <td><?= htmlspecialchars($plang_display) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $user['user_id'] ?>" class="btn btn-edit">Редактировать</a>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="delete_id" value="<?= $user['user_id'] ?>">
                            <button type="submit" class="btn btn-delete" 
                                    onclick="return confirm('Вы уверены, что хотите удалить этого пользователя?')">
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
