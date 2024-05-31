<?php


class Chat 
{
    public static function getAllUsers(Database $pdo)
    {
        $query = "SELECT first_name, last_name FROM users;";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll();
    }

    public static function sendMessage(Database $pdo, int $senderId, int $receiverId, string $message)
    {
        $query = "INSET INTO messages (sender_id, receiver_id, message_content) VALUES (:sender_id, :receiver_id, :message_content);";

        $stmt = $pdo-> query($query, [':sender_id' => $senderId, ':receiver_id' => $receiverId,'message_content'=> $message]);

        return $stmt->fetch();
    }
}