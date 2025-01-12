<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principală - Companie de Transport</title>
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
            <h1>Bine ați venit la <b>TranziteRO</b></h1>
            <p class="lead">Transport rapid, sigur și de încredere.</p>
            <p>Asigurăm alternative moderne de trasport încă din anul 1993. Fie că alegi un traseu zilnic, județean, fie
                că alegi să închiriezi un autocar pentru o excursie internațională, suntem aici cu cele mai rentabile
                opțiuni.</p>
            <a href="/curse" class="btn btn-light btn-lg">Rezerva cursa</a>
        </div>
    </header>

    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card p-3 d-flex align-items-center">
                        <div class="title">
                            <h3>Curse zilnice interjudețene</h3>
                        </div>
                        <div>
                            <img src="./assets/bus-icon.png" alt="Bus Icon" width="42" height="42">
                        </div>
                        <div class="text p-8">
                            Operăm zilnic curse interjudețene: Iași-Onești-Codlea-Deva, Iași-Sibiu,
                            Iași-Brăila-Constanța-Mangalia și Iași-Roman. Dacă aceste localități sunt în
                            interesul tău și îți dorești o programare, accesează pagina Cumpără Bilet.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h3>Livrări Expres</h3>
                        <p>Livrăm pachete la timp, indiferent de distanță.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h3>Logistică Personalizată</h3>
                        <p>Planificare și soluții logistice adaptate nevoilor tale.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container">
            <p>&copy; 2025 TransportRapid. Toate drepturile rezervate.</p>
            <p>Contactați-ne la <a href="mailto:info@transportrapid.ro" class="text-white">info@transportrapid.ro</a>
            </p>
        </div>
    </footer>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margin for body */
        }

        header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            margin-top: 0; /* Ensure no space between navbar and header */
            padding-top: 0; /* Remove extra padding at the top */
        }

        .navbar {
            margin-bottom: 0; /* Remove bottom margin to prevent space between navbar and header */
            padding-bottom: 0; /* Remove bottom padding */
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #343a40;
        }

        .text {
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-top: 10px;
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
</body>

</html>
