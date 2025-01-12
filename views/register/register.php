<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Înregistrare - TranziteRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f4f7fa;
            height: 100vh;
            margin: 0;
        }

        /* Center the form */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            width: 100%;
            max-width: 450px;
            padding: 20px;
            text-align: center;
            background-color: white;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            animation: fadeInDown 1s forwards;
            opacity: 0;
        }

        h1 {
            font-size: 24px;
            color: #0d0d0d;
            margin-bottom: 20px;
        }

        h4 {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        .form-label {
            text-align: left;
            font-weight: 600;
            color: #0d0d0d;
        }

        .form-control {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px;
            text-align: center;
            font-size: 16px;
            margin-bottom: 15px;
            width: 100%;
            border-radius: 5px;
            transition: all 0.5s ease-in-out;
        }

        .form-control:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
            outline: none;
        }

        .fadeInButton {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            font-size: 13px;
            text-transform: uppercase;
            border-radius: 5px;
            box-shadow: 0 10px 30px rgba(95, 186, 233, 0.4);
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        .fadeInButton:hover {
            background-color: #39ace7;
        }

        .fadeInButton:active {
            transform: scale(0.95);
        }

        .fadeInButton:focus {
            outline: none;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Navbar */
        nav {
            z-index: 1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .wrapper {
                max-width: 100%;
                padding: 15px;
            }

            h1 {
                font-size: 22px;
            }

            h4 {
                font-size: 16px;
            }

            .form-label {
                font-size: 14px;
            }

            .form-control {
                font-size: 14px;
            }

            .fadeInButton {
                padding: 12px 60px;
                font-size: 12px;
            }
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>🛣️TranziteRO</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Acasă</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicii</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form container (centered) -->
    <div class="form-container">
        <div class="wrapper">
            <h1><b>🛣️TranziteRO</b></h1>
            <h4>Înregistrează-te pe TranziteRO</h4>
            <form action="/register" method="POST">
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nume complet</label>
                    <input type="text" class="form-control fadeIn second" id="name" name="name" required>
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresă de email</label>
                    <input type="email" class="form-control fadeIn third" id="email" name="email" required>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Parolă</label>
                    <input type="password" class="form-control fadeIn fourth" id="password" name="password" required>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmă parola</label>
                    <input type="password" class="form-control fadeIn fifth" id="confirm_password" name="confirm_password" required>
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit" class="fadeInButton">Înregistrează-te</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p>&copy; 2025 TranziteRO. Toate drepturile rezervate.</p>
            <p>Contactați-ne la <a href="mailto:info@tranzitero.ro" class="text-white">info@tranzitero.ro</a></p>
        </div>
    </footer>

</body>

</html>
