<?php
header('Content-Type: application/json');

try {
    $db = new PDO("mysql:host=localhost;dbname=u70422", 'u70422', '4545635');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->beginTransaction();

    // Создание пользователя
    $login = uniqid('user_');
    $password = bin2hex(random_bytes(4));
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO p_users (login, password_hash, email) VALUES (?, ?, ?)");
    $stmt->execute([$login, $password_hash, $_POST['email']]);
    $user_id = $db->lastInsertId();

    // Создание профиля
    $stmt = $db->prepare("
        INSERT INTO p_profiles 
        (user_id, full_name, phone, birth_date, gender, bio) 
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $user_id,
        $_POST['fio'],
        $_POST['tel'],
        $_POST['date'],
        $_POST['gender'],
        $_POST['bio']
    ]);

    // Добавление языков
    if (!empty($_POST['plang'])) {
        $stmt = $db->prepare("INSERT INTO p_user_languages (user_id, language_id) VALUES (?, ?)");
        foreach ($_POST['plang'] as $lang_id) {
            $stmt->execute([$user_id, (int)$lang_id]);
        }
    }

    $db->commit();

    // Возвращаем данные для отображения на клиенте
    echo json_encode([
        'success' => true,
        'login' => $login,
        'password' => $password,
        'message' => 'Регистрация успешна!'
    ]);
    
} catch (PDOException $e) {
    $db->rollBack();
    echo json_encode([
        'success' => false,
        'message' => 'Ошибка базы данных: ' . $e->getMessage()
    ]);
}
?>
