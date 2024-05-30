<?php


class Chat 
{
    public static function getAllUsers(Database $pdo)
    {
        $query = "SELECT first_name, last_name FROM users;";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll();
    }
}