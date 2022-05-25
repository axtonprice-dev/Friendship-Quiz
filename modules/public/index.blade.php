<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="%[site_name]%">
    <meta name="keywords" content="friends,know your friends,quiz">
    <meta name="theme-color" content="#181a1b">
    <meta name="msapplication-navbutton-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="modules/public/resources/img/text-logo-white.png" type="image/x-icon">
    <title>%[site_name]% - %[site_desc]%</title>
    <meta property="og:title" content="How well do your friends really know you?">
    <meta property="og:description" content="%[site_title]%">
    <meta property="og:image" content="modules/public/resources/img/text-logo-white.png">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Intro settings -->
        <style>
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 100px;
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                    <img src="modules/public/resources/img/text-logo.png" height="48" alt="%[site_name]%" loading="lazy" style="margin-top: -3px;" />
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#createquiz">Create Quiz</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <!-- Jumbotron -->
                <div id="intro" class="p-5 text-center bg-light shadow-5 rounded mb-5">
                    <h1 class="mb-3 h2">%[site_name_long]%</h1>
                    <p class="mb-3">%[site_title]%</p>
                </div>
                <!-- Jumbotron -->
            </section>
            <!--Section: Content-->
        </div>
    </main>
    <!--Main layout-->

    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="row d-flex justify-content-center">
                <div class="p-3 text-center rounded">
                    <h2 class="mb-3 h3">Create new Quiz</h2>
                </div>
                <!-- Jumbotron -->
                <form class="col-6" id="createquiz" action="modules/backend/createquiz.php">
                    <!-- Password input -->
                    <label class="form-label" for="dropdown">Enter your Name: </label>
                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" name="name" placeholder="Alex"/>
                        <label class="form-label" for="name">Your Name</label>
                    </div>

                    <!-- Submit button -->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-outline-primary btn-block">Create Quiz</button>
                        </div>
                    </div>
                </form>
                <!-- Jumbotron -->
            </section>
            <!--Section: Content-->
        </div>
    </main>

    <!--Footer-->
    <footer class="text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
        Copyright <a href="https://github.com/axtonprice">axtonprice</a> © %[site_name]% - ([date_year])
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="modules/public/resources/js/mdb.min.js"></script>
</body>

</html>