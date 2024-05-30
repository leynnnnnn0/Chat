<?php

class InputValidation
{
    public static function validate_user_input(int|string $input1 = 'value', int|string $input2 = 'value', int|string $input3 = 'value', int|string $input4 = 'value', int|string $input5 = 'value')
    {
        return empty($input1) || empty($input2) || empty($input3) || empty($input4) || empty($input5);
    }

    public static function validate_email_format(string $email) 
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validate_email_existence(Database $pdo, string $email) {
        try {
            $query = 'SELECT * FROM users WHERE email = :email';
        $stmt = $pdo->query($query, [':email' => $email]);
        return $stmt->fetch(); 
        }catch (PDOException $e) {
            $_SESSION['database_error'] = ['email_validation_error' => $e->getMessage()];
        }
        return false;
    }

    public static function validate_password_length(string $password)
    {
        return !strlen($password) >= 8;
    }

    public static function validate_login_password(string $password, string $hashedPass)
    {
        return password_verify($password, $hashedPass);
    }

    public static function handle_error(string $message, string $location)
    {
        $_SESSION['error'] = $message;
            header('Location: ' . $location);
            die();
    }

    public static function handle_success(string $message, string $location)
    {
        $_SESSION['message'] = $message;
            header('Location: '. $location);
            die();
    }
}