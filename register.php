<?php

require_once "UserPdo.php";

try {
    $userPdo = new UserPdo();

    if (!$userPdo->IsEmailUnique($request['email'])) {
        $errors[] = "Пользователь с данной почтой уже существует!";
        echo json_encode(['errors' => $errors], JSON_UNESCAPED_UNICODE);
        exit;
    }
    if (!$userPdo->save($request)) {
        $errors[] = "Не удалось зарегистрировать пользователя. Попробуйте позже.";
        echo json_encode(['errors' => $errors], JSON_UNESCAPED_UNICODE);
        exit;
    }
} catch (PDOException $e) {
    $errors[] = "Не удалось зарегистрировать пользователя. Попробуйте позже.";
    echo json_encode(['errors' => $errors], JSON_UNESCAPED_UNICODE);
    exit;
}

session_start();
$_SESSION["userId"] = $userPdo->getUserIdByEmail($request['email']);
$_SESSION["userLogin"] = $request['login'];

echo json_encode(['success' => true]);