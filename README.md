# PHP Respository Pattern

This is a simple example code of `Repository Design Pattern` using PHP.

This code consists of:

* `User` class as business model
* `UserRepository` class as object repository (which implements `IUserRepository` interface)
* `UserService ` class as an intermediate layer between controller and Repository able to handle all business logic
* `UserController` as controller class that handle requests
