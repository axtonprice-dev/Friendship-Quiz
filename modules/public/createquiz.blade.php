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
    <link href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
    <!-- Custom Script -->
    <link href="modules/public/resources/css/custom.style.css" rel="stylesheet" />
</head>

<body>
    <script>
        const urlId = `([urldata_id])`; // Assign id variable from URL
        var questionCounter = 1; // Set questions counter to 1
    </script>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white absoloute-top">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="./">
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
                            <a class="nav-link" href="createquiz">Create Quiz</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!-- Modal -->
    <div class="modal fade" id="maxQuestionsModal" tabindex="-1" aria-labelledby="maxQuestionsModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="maxQuestionsModalLabel">Max Questions Reached</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Yowzer! You've reached the question limit!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-md-start">
                <h4 class="mb-5 text-center">
                    <dat id="username"></dat>'s Friendship Quiz
                </h4>

                <div class="row">
                    <div class="col-3">
                        <!-- Tab navs -->
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-mdb-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Question 1</a>
                        </div>

                        <div class="nav flex-column nav-pills text-center" id="newQuestionButton" role="tablist" aria-orientation="vertical">
                            <button type="button" class="nav-link" aria-controls="pill-new" aria-selected="false" onclick="newQuestionTab();">
                                New Question
                            </button>
                        </div>

                        <div class="nav flex-column nav-pills text-center mt-4" id="submitButton" role="tablist" aria-orientation="vertical">
                            <button type="button" class="nav-submit-btn nav-link" aria-controls="pill-new" aria-selected="false" onclick="submitForm();">
                                <i class="fa-solid fa-check"></i> Finish Quiz
                            </button>
                        </div>
                        <!-- Tab navs -->
                    </div>

                    <div class="col-9">
                        <!-- Tab content -->
                        <div class="tab-content" id="v-pills-tabContent"></div>
                        <!-- Tab content -->
                    </div>

                </div>
            </section>
            <!--Section: Content-->
        </div>
    </main>

    <!--Footer-->
    <footer class="text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            Copyright <a href="https://github.com/axtonprice">axtonprice</a> ?? %[site_name]% - ([date_year])
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->

    <!-- MDB -->
    <script type="text/javascript" src="modules/public/resources/js/mdb.min.js"></script>
    <!-- Custom Script -->
    <script type="text/javascript" src="modules/public/resources/js/quizFormCreator.js"></script>
</body>

</html>