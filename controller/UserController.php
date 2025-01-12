<?php

include_once '/model/User.php';

class UserController
{
    private $userRepository;

    // Constructor to inject the UserRepository
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // Register user
    public function register($name, $email, $password)
    {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create a new user object
        $user = new User($name, $email, $hashedPassword);

        // Call the add method from UserRepository to save the user in DB
        if ($this->userRepository->add($user)) {
            // Return the success view
            return 'views/register/success.php';
        } else {
            // Return the failure view
            return 'views/register/failure.php';
        }
    }

    // Login user
    public function login($email, $password)
    {
        try {
            // Try to find the user by email
            $user = $this->userRepository->findByUsername($email);

            // Check if the password is correct
            if (password_verify($password, $user->getPassword())) {
                // Return the success view after login
                return 'views/login/success.php';
            } else {
                // Return the failure view
                return 'views/login/failure.php';
            }
        } catch (Exception $e) {
            // User not found, return failure view
            return 'views/login/failure.php';
        }
    }
}
?>