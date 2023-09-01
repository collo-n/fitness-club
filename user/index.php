<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../components/styles/styles.css">
    <style>
        body {
            background-image: url('../components/images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../components/images/logo.jpg" alt="Fitness Club Logo" style="width: 100px; height: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
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
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="container-card"> <!-- Apply the card styling to the container -->
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h3>Shift Request</h3>
                        </div>
                        <div class="card-body">
                            <form action="shift_request.php" method="POST">
                                <div class="mb-3">
                                    <label for="shift_date" class="form-label">Shift Date</label>
                                    <input type="date" class="form-control" id="shift_date" name="shift_date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="shift_time" class="form-label">Shift Time</label>
                                    <input type="time" class="form-control" id="shift_time" name="shift_time" required>
                                </div>
                                <button type="submit" class="btn btn-success">Request Shift</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2023 Fitness Club. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>