<?php

include_once ("IUserRepository.php");
class UserRepository implements IUserRepository
{
    private $pdo;

    // Constructor
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Implement the add method (for user registration)
    public function add(User $user)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $user->getName());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', password_hash($user->getPassword(), PASSWORD_DEFAULT)); // Hash password
        return $stmt->execute();
    }

    // Implement the findByUsername method
    public function findByUsername($username): User
    {
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':email', $username);
        $stmt->execute();

        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user_data) {
            return new User($user_data['name'], $user_data['email'], $user_data['password'], $user_data['id']);
        }

        throw new Exception("User not found.");
    }

    // Implement the update method
    public function update(User $user)
    {
        $sql = "UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $user->getId());
        $stmt->bindValue(':name', $user->getName());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', password_hash($user->getPassword(), PASSWORD_DEFAULT)); // Hash password
        return $stmt->execute();
    }

    // Implement the remove method
    public function remove(User $user)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $user->getId());
        return $stmt->execute();
    }
}
?>
