<?php
function profile_put($request, $userId) {
    // Проверка прав доступа
    if ($request['user']['id'] != $userId) {
        return ['error' => 'Forbidden', 'status' => 403];
    }
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    try {
        $pdo = DB::getConnection();
        
        // Обновляем данные формы
        if (isset($data['form_data_id'])) {
            $stmt = $pdo->prepare("UPDATE p_feedback SET name = ?, email = ?, phone = ?, message = ? WHERE id = ? AND user_id = ?");
            $stmt->execute([
                $data['name'],
                $data['email'],
                $data['phone'],
                $data['message'] ?? null,
                $data['form_data_id'],
                $userId
            ]);
        }
        
        // Обновляем профиль
        $stmt = $pdo->prepare("UPDATE p_profiles SET bio = ?, company = ?, position = ? WHERE user_id = ?");
        $stmt->execute([
            $data['bio'] ?? null,
            $data['company'] ?? null,
            $data['position'] ?? null,
            $userId
        ]);
        
        return ['success' => true, 'status' => 200];
        
    } catch (PDOException $e) {
        return ['error' => 'Database error', 'status' => 500];
    }
}
