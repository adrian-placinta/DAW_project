<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orarul Curselor - TranziteRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0; padding-bottom: 0;">
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
                        <a class="nav-link" href="#features">Servicii</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5" style="margin-top: 0; padding-top: 0;">
        <div class="container">
            <h1>Orarul Curselor</h1>
            <p class="lead">Consultați orarul curselor noastre zilnice pentru planificări ușoare.</p>
        </div>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Orar Curse</h2>
        <div class="table-container mx-auto" style="max-height: 300px; width: 90%; overflow-y: auto; overflow-x: auto; border: 1px solid #dee2e6;">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ORA</th>
                        <th>MASINA</th>
                        <th>TRASEU</th>
                        <th>LOCURI DISPONIBILE</th>
                        <th>ACȚIUNE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mock data
                    $data = [
                        ["ora" => "08:00", "masina" => "Ford Transit", "traseu" => ["Bucharest", "Otopeni", "Câmpina", "Ploiești"], "locuri" => 12],
                        ["ora" => "10:30", "masina" => "Mercedes Sprinter", "traseu" => ["Bucharest", "Sinaia", "Predeal", "Brașov"], "locuri" => 0],
                        ["ora" => "13:00", "masina" => "Renault Master", "traseu" => ["Bucharest", "Fetești", "Cernavodă", "Constanța"], "locuri" => 10],
                        ["ora" => "15:45", "masina" => "Opel Vivaro", "traseu" => ["Bucharest", "Pitești", "Râmnicu Vâlcea", "Sibiu"], "locuri" => 5],
                        ["ora" => "18:00", "masina" => "Fiat Ducato", "traseu" => ["Bucharest", "Turda", "Târgu Mureș", "Cluj"], "locuri" => 0],
                        ["ora" => "20:30", "masina" => "VW Crafter", "traseu" => ["Bucharest", "Bacău", "Roman", "Iași"], "locuri" => 9],
                        ["ora" => "23:00", "masina" => "Peugeot Boxer", "traseu" => ["Bucharest", "Craiova", "Lugoj", "Timișoara"], "locuri" => 6],
                    ];

                    // Generate table rows
                    foreach ($data as $row) {
                        // Join the locations with a hyphen
                        $traseu = implode(" - ", $row['traseu']);

                        // Check if the ticket is available
                        $button = $row['locuri'] > 0
                            ? "<button class='btn btn-success'>Rezervă</button>"
                            : "<button class='btn btn-danger' disabled>Indisponibil</button>";

                        echo "<tr>
                                <td>{$row['ora']}</td>
                                <td>{$row['masina']}</td>
                                <td>{$traseu}</td>
                                <td>{$row['locuri']}</td>
                                <td class='text-center'>{$button}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer id="contact" class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container">
            <p>&copy; 2025 TranziteRO. Toate drepturile rezervate.</p>
            <p>Contactați-ne la <a href="mailto:info@tranzitero.ro" class="text-white">info@tranzitero.ro</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
        header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            margin-top: 0; /* Remove top margin */
            padding-top: 0; /* Remove top padding */
        }

        .navbar {
            margin-bottom: 0; /* Remove bottom margin */
            padding-bottom: 0; /* Remove bottom padding */
        }

        .table-container {
            margin: auto;
        }
    </style>

</body>

</html>
