<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
        <?php
        if (isset($title)):
            echo $title;
        else:
            echo "Home";
        endif;
        ?>

    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="starter-template.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark rgba(43, 38, 38, 0) mb-4">
        <a class="navbar-brand" href="./index.php">Home</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

            <a class="nav-link" href="./index.php">🏠Home </a>
            </li>
            <ul class="navbar-nav">
                <li class="nav-item <?php if ($nav === "DEBUG"): ?> active <?php endif ?>">
                    <a class="nav-link" href="./session_actuelle.php">🔍Session Actuelle</a>
                </li>


                <li class="nav-item <?php if ($nav === "RESET"): ?> active <?php endif ?>">
                    <a class="nav-link" href="./reset.php"> 🔄Reset Sessions</a>
                </li>

                <?php if (isset($_SESSION['connected']) && $_SESSION['connected']): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="calculatriceDropdown" role="button"
                            data-toggle="dropdown">
                            🧮 Calculatrice
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="./addition.php">Euro/Dollars </a>

                            <a class="dropdown-item" href="./multiplication.php">Euro/Yen</a>

                            <a class="dropdown-item" href="./division.php">➗Division </a>

                            <a class="dropdown-item" href="./soustraction.php">➖Soustraction </a>

                            <a class="dropdown-item" href="./soustraction.php">➖Soustraction </a>

                            <a class="dropdown-item" href="./soustraction.php">➖Soustraction </a>
                    </li>
            </div>

            <li class="nav-item <?php if ($nav === "monprofile"): ?> active <?php endif ?>">
                <a class="nav-link" href="./monproBase de donnéesfile.php">👤 Mon profil </a>
            </li>

        <?php endif; ?>

        <ul class="navbar-nav mr-auto">
            <?php if (isset($_SESSION['connected']) && $_SESSION['connected']): ?>

                <li class="nav-item <?php if ($nav === "logout"): ?> active <?php endif ?>">
                    <a class="nav-link" href="./logout.php">🚪Logout </a>
                </li>
            <?php else: ?>

                <li class="nav-item <?php if ($nav === "login"): ?> active <?php endif ?>">
                    <a class="nav-link" href="./login.php">🔐Login </a>
                </li>
            <?php endif; ?>
        </ul>

        </div>
    </nav>