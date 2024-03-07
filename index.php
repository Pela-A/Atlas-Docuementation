<?php
/*
Introduction of each of the team members and a detailed description of the responsibilities of each member
Your proposal in PDF or HTML
prototype in PDF or HTML
Technical Design Document in PDF or HTML
Relationship Diagram of your normalized database in PDF or HTML
Screenshots of your application
Copy of the PowerPoint presentation
Zipped file of all your source code
Link to GitHub repo must include all of the code

create documentation downloads/pdf viewer



home page with carousel of screenshots, descriptions, and team members/respon
on home page create description of team members and their responsibilities

carousel with screenshots of application and brief description

downloadable zip file of all source code

*/

?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Atlas Documentation</title>
  </head>
  <body class="d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/atlasPhotos/ATLAS_Logo.png" style="width:50px;" alt="Logo">
            
                <strong>ATLAS</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="documentation.php">Documentation</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <main class="flex-shrink-0">
        <div class="container" style="padding-top: 80px;">

            <h1 class="text-center">The Atlas Project</h1>
            
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/atlasPhotos/testImg1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Log in/Sign up</h5>
                        <p>Choose whether you want to create your own organization, or join another!</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/atlasPhotos/testImg2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Manage your Organization</h5>
                        <p>Accept users into your organization, or modify settings and user access rights for any of its users!</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/atlasPhotos/testImg3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Manage Trainings</h5>
                        <p>Enter and track your trainings for your organization! Keep track of Credit Hours.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row">
                <div class="col-6 py-4">
                    <h2>Alexander Pela</h2>
                    <ul>
                        <li>Created Login, Organization Creation, and Join Organization features (Home Page)</li>
                        <li>Created Department CRUD and functionality</li>
                        <li>Created Login Attempts Manager and its functionality</li>
                        <li>Created organization CRUD</li>
                    </ul>
                </div>
                <div class="col-6 py-4">
                    <h2>Tristan Knott</h2>
                    <ul>
                        <li>Created user account management inside the site</li>
                        <li>Created Training Modules/Viewer</li>
                        <li>Created header, aside, and footer.</li>
                        <li>Lead the idea of what this project is meant to be and what the site needed to accomplish</li>

                    </ul>
                </div>

                <div class="col-12 text-center">
                    <p>Both creators were equally involved in the coding of this project. We both worked on the creation of the documentation including site maps, prototypes, proposals, Technical Design, ERD. Both worked on the Site Documentation Site as well.</p>
                </div>
            </div>
    </main>




    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-muted row col-12">Alexander Pela and Tristan Knott.</span>
            <a href="https://github.com/Pela-A/Atlas-Docuementation" class="row">Documentation Repo Link</a>
            <a href="https://github.com/Pela-A/Learning-Management-System" class="row">Atlas Project Link</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>