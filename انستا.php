<?php

$token = "6634940523:AAGwDe9npJherMdMJ5BhDyQgCLaZ0cpj2G4"; // استبدل هذا بالتوكن الخاص بك
$apiUrl = "https://api.telegram.org/bot$token/";

function sendMessage($chatId, $text) {
    global $apiUrl;
    $url = $apiUrl . "sendMessage?chat_id=$chatId&text=" . urlencode($text);
    file_get_contents($url);
}

function zigzag($username) {
    // زغرفة اليوزر
    return str_replace(['a', 'b', 'c', 'd', 'e', 'f'], ['𝒶', '𝒷', '𝒸', '𝒹', '𝑒', '𝒻'], $username);
}

$update = json_decode(file_get_contents("php://input"), TRUE);
if (isset($update["message"])) {
    $chatId = $update["message"]["chat"]["id"];
    $username = $update["message"]["text"];
    $zigzagUsername = zigzag($username);
    sendMessage($chatId, $zigzagUsername);
}

?>
