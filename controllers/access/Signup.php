<?php
require_once 'model/validation/InputValidation.php';
require_once 'session/session.php';
require_once 'model/SignupModel.php';
class Signup
{
    public static function sign_up_input_validation(Database $pdo, string $firstName, string $lastName, string $username, string $email, string $password) {
        if(InputValidation::validate_user_input($firstName,$lastName, $username, $email, $password)) {
            InputValidation::handle_error('All fields are required', '/chat/index.php/signup');
        }
        if(InputValidation::validate_email_format($email)) {
            InputValidation::handle_error('Invalid email format', '/chat/index.php/signup');
        }
        if(InputValidation::validate_email_existence($pdo, $email)) {
            
            InputValidation::handle_error('Email already exists', '/chat/index.php/signup');
        }
        if(InputValidation::validate_password_length($password)) {
            dd("PROBLEM HERE");
            InputValidation::handle_error('Email already exists', '/chat/index.php/signup');
        }
    }
}

require_once 'database/dbhelper.php';

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

Signup::sign_up_input_validation($pdo, $firstName, $lastName,$username, $email, $password);


if(!isset($_SESSION['error']))
{
    SignupModel::sign_up_user($pdo, $username, $email, $password, $firstName, $lastName);
    InputValidation::handle_success("Account Created", "/chat/index.php/signup");
}
