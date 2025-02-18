<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Navigation Bar -->

    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="logo-container">
                <img src="" alt="company_logo" id="logo" width="70px" height="70">
            </a>
            <a class="navbar-brand title" href="#" id="title-container"><span class="h1" id="title"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- ask Question Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  border-warning border-end">
                    <h1 class="display-4 text-info">Expert Medical Store</h1>
                    <p class="lead text-success mt-5">Get the best medical treatment from our experienced doctors.</p>
                    <a href="#" class="btn btn-primary mt-5">Ask a Question</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://media.istockphoto.com/id/1220626626/vector/pharmacy.jpg?s=1024x1024&w=is&k=20&c=sKuLXGhKD7QhfIk0Sd-9f46sFZpn__Olva_5lj4MN9Y=" class="img-fluid" alt="Medical Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services mt-1" align-item="center">
        <div class="container">
            <h2 class="text-center display-4">Online Buy</h2>
            <hr>
            <div class="row">
                <div id="medicine-slider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="medicine-slides">
                        <!-- Slides will dynamically -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#medicine-slider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#medicine-slider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
    </section>
    <!-- About Us section -->
    <section class="services mt-1" align-item="center" id="about">
        <div class="container">
            <h2 class="text-center display-4">About Us</h2>
            <hr>
            <div class="row">
                <div class="col-md-4 offset-4">
                    <img src="" alt="" height="280" id="about_img">
                </div>
                <div class="col-md-12 text-center mt-4">
                <p id="about_text"></p>
                </div>
            </div>
    </section>
    <!-- Footer Section -->
    <footer class="footer bg-light mt-1">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4" id="contact">
                    <h3><span class="border-bottom border-2  border-warning">Contact Us</span></h3>
                    <p><b>Address: </b><span id="address"></span></p>
                    <p><b>Phone: </b><span id="m_no"></span></p>
                    <p><b>Email: </b><span id="email"></span></p>
                </div>
                <div class="col-lg-4">
                    <h3><span class="border-bottom border-2  border-warning">Quick Links</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3><span class="border-bottom border-2  border-warning">Follow Us</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            <p><b>&copy; 2025</b> Medical Store. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- script -->

    <script src="script.js"></script>

</body>

</html>