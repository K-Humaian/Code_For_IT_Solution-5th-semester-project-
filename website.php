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
    <section class="banner-wrap10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-6 order-lg-1 order-2">
                    <div>
                        <h2>
                            Designing <span><br class="d-none d-xl-block"> the websites.</span>
                        </h2>
                        <p>
                            At our IT company, we take pride in delivering beautifully designed websites that captivate
                            audiences and drive business growth. Our team of skilled designers and developers works
                            closely with clients to create unique, custom-tailored websites that reflect their brand
                            identity and meet their specific objectives. <br>

                            We understand that a well-designed website is more than just an online presence – it's a
                            powerful marketing tool that can attract and engage visitors, generate leads, and convert
                            them into loyal customers. With this in mind, we combine creativity, technical expertise,
                            and industry best practices to deliver websites that leave a lasting impression.

                            Our design process begins with a comprehensive discovery phase, where we dive deep into
                            understanding our clients' target audience, business goals, and brand positioning. This
                            knowledge serves as the foundation for crafting a visually stunning and intuitive user
                            interface that ensures a seamless user experience. <br>

                            From there, our talented designers translate the client's vision into reality, employing
                            modern design principles, eye-catching graphics, and intuitive navigation to create a
                            website that is not only aesthetically pleasing but also easy to navigate and navigate on
                            various devices.

                            In addition to visual appeal, we prioritize functionality and performance. Our development
                            team leverages the latest web technologies and frameworks to ensure that the website is
                            responsive, fast-loading, and compatible with all major browsers. We also adhere to industry
                            standards and best practices to optimize the website for search engines, enhancing its
                            visibility and driving organic traffic. <br>

                            To facilitate content management and future updates, we offer flexible and user-friendly
                            content management systems (CMS) that empower our clients to easily maintain and update
                            their websites without requiring extensive technical knowledge.

                            Throughout the design and development process, we maintain open lines of communication with
                            our clients, seeking their feedback and input at every stage. This collaborative approach
                            allows us to ensure that the final product aligns with their vision and exceeds their
                            expectations. <br>

                            In summary, our designed websites are the result of a perfect blend of artistic creativity,
                            technical expertise, and a deep understanding of our clients' goals. We are committed to
                            delivering websites that not only showcase our clients' brands but also drive measurable
                            business results in today's digital landscape. <br>
                        </p>
                        <a href="https://youtu.be/XRA1aZiuNko" class="btn main-btn mt-5">See the Demo!!</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 order-lg-2 order-1">
                    <div>
                        <img src="./Images/banner/web-designing.webp" class="img-fluid">
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