<?php

class InputValidation
{
    public static function validate_user_input(int|string $input1 = 'value', int|string $input2 = 'value', int|string $input3 = 'value', int|string $input4 = 'value', int|string $input5 = 'value')
    {
        return !empty($input1) && !empty($input2) && !empty($input3) && !empty($input4) && !empty($input5);
    }

    public static function validate_email_format(string $email) 
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validate_email_existence(Database $pdo, string $email) {
        $query = 'SELECT * FROM users WHERE email = :email';
        $stmt = $pdo->query($query, [':email' => $email]);
        return $stmt->fetch(); 
    }

    public static function validate_password_length(string $password)
    {
        return strlen($password) >= 8;
    }

    public static function validate_login_password(Database $pdo, string $email, string $password)
    {
        $result = InputValidation::validate_email_existence($pdo, $email);
        return !password_verify($password, $result['pass']);      
    }


}