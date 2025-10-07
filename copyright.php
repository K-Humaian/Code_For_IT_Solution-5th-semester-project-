<?php
// index.php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipage</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 5 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
</head>

<body class="services">
    <!-- Navbar Section Start -->
    <header id="full_nav">
        <div class="header fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img src="./images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="website.html">Website</a></li>
                                    <li><a class="dropdown-item" href="branding.html">Branding</a></li>
                                    <li><a class="dropdown-item" href="advertising.html">Advertisement</a></li>
                                    <li><a class="dropdown-item" href="social-media.html">Social Media</a></li>
                                    <li><a class="dropdown-item" href="discussion.html">Discussion</a></li>
                                    <li><a class="dropdown-item" href="copyright.html">Copyrights</a></li>
                                    <li><a class="dropdown-item" href="futureplan.html">Future Plan</a></li>
                                    <li><a class="dropdown-item" href="Machinelearning.html">Machine Learning</a></li>
                                    <li><a class="dropdown-item" href="datascience.html">Data Science</a></li>
                                    <li><a class="dropdown-item" href="google.html">Google</a></li>
                                    <li><a class="dropdown-item" href="microsoft.html">Microsoft</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portfolio.html">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Navbar Section Exit -->
    <section class="banner-wrap4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-6 order-lg-1 order-2">
                    <div>
                        <h2>
                            See <span><br class="d-none d-xl-block"> our Copyrights.</span>
                        </h2>
                        <p>
                            Copyright Notice:

                            The content, materials, and intellectual property displayed on the [Multipage] website,
                            including but not limited to text, graphics, logos, images, software, and design elements,
                            are protected by copyright laws and are the exclusive property of [Company Name] or its
                            licensors. All rights reserved.
                        </p>
                        <p>No part of the [Multipage] website may be reproduced, distributed, transmitted, copied,
                            modified, or otherwise exploited without the prior written consent of [Multipage].
                            Unauthorized use or reproduction of any content from our website may result in legal action
                            and liability for copyright infringement.</p>
                        <p>Any trademarks, service marks, trade names, or logos displayed on the [Multipage] website
                            are the property of [Multipage] or their respective owners. Use of these trademarks,
                            service marks, trade names, or logos without prior written consent is strictly prohibited.

                            The information provided on the [Multipage] website is intended for informational
                            purposes only and does not constitute professional advice. While we make every effort to
                            ensure the accuracy and reliability of the information presented, we cannot guarantee its
                            completeness or timeliness.

                            By accessing and using the [Multipage] website, you agree to comply with all applicable
                            copyright laws and refrain from any unauthorized use or reproduction of the content. You may
                            download or print materials from the website for personal, non-commercial use only, provided
                            that you retain all copyright and proprietary notices.</p>
                        <p><span><b>Copyright © [2023] [Multipage]. All rights
                                reserved.</span></span></p>
                        <p class="mt-5">Let's get started!</p>
                        <a href="https://youtu.be/XRA1aZiuNko" class="btn main-btn mt-5">See the Demo!!</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 order-lg-2 order-1">
                    <div>
                        <img src="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <!-- Custom Js -->
    <script src="main.js"></script>
</body>

</html>