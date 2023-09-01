<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./components/styles/styles.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./components/images/logo.jpg" alt="Fitness Club Logo" style="width: 100px; height: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exercises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bodybuilding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Packages</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link login-link" href="login.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Automatic Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"> <!-- Set interval to 5000 milliseconds (5 seconds) -->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('./components/images/bg.jpg');">
                <div class="carousel-caption">
                    <div class="container content">
                        <h1>Welcome to Our Fitness Club</h1>
                        <p>We offer a variety of exercises, bodybuilding activities, and membership packages to help you achieve your fitness goals.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZXhlcmNpc2VzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60');">
                <div class="carousel-caption">
                    <div class="container content">
                        <h1>Exercises</h1>
                        <p>Explore our wide range of exercises designed to improve your strength, endurance, and flexibility.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGJvZHlidWlsZGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60');">
                <div class="carousel-caption">
                    <div class="container content">
                        <h1>Bodybuilding Activities</h1>
                        <p>Join our bodybuilding classes and activities to build muscle and sculpt your body.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2023 Fitness Club. All rights reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
