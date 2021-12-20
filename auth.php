<?php

require_once "UserPdo.php";

$userPdo = new UserPdo();

$user = $userPdo->getUserByLogin($request['login']);
if ($user == false) {
    $errors[] = "Пользователь с таким логином не найден!";
}

if ($userPdo->getUserIfPasswordVerify($request['login'], $request['password']) == false) {
    $errors[] = "Пароль не верный!";
}

if (!empty($errors)) {
    echo json_encode(['errors' => $errors], JSON_UNESCAPED_UNICODE);
    exit;
}

session_start();
$_SESSION["userId"] = $user['id'];
$_SESSION["userLogin"] = $request['login'];

echo json_encode(['success' => true]);