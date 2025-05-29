<?php
function auth_register($request) {
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Валидация
    if (empty($data['login']) || empty($data['password']) || empty($data['email'])) {
        return ['error' => 'All fields are required', 'status' => 400];
    }

    try {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare("INSERT INTO p_users (login, password_hash, email) VALUES (?, ?, ?)");
        $stmt->execute([
            $data['login'],
            password_hash($data['password'], PASSWORD_BCRYPT),
            $data['email']
        ]);
        
        $userId = $pdo->lastInsertId();
        
        // Создаем профиль
        $stmt = $pdo->prepare("INSERT INTO p_profiles (user_id) VALUES (?)");
        $stmt->execute([$userId]);
        
        return [
            'credentials' => [
                'login' => $data['login'],
                'password' => $data['password'], // Только для демонстрации!
                'profile_url' => '/api/profile/'.$userId
            ],
            'status' => 201
        ];
        
    } catch (PDOException $e) {
        return ['error' => 'User already exists', 'status' => 409];
    }
}

function auth_login($request) {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $pdo = DB::getConnection();
    $stmt = $pdo->prepare("SELECT * FROM p_users WHERE login = ?");
    $stmt->execute([$data['login']]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($data['password'], $user['password_hash'])) {
        $token = JWT::encode([
            'id' => $user['id'],
            'login' => $user['login'],
            'exp' => time() + 3600
        ], $conf['jwt_secret']);
        
        return ['token' => $token, 'status' => 200];
    }
    
    return ['error' => 'Invalid credentials', 'status' => 401];
}
