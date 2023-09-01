<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../components/styles/styles.css" rel="stylesheet">
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
                        <a class="nav-link active" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feedback</a>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link login-link" href="login.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 custom-sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="members.php">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trainers.php">Trainers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="application.php">Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="attendance.php">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reports.php">Reports</a>
                    </li>
                </ul>
            </aside>
            <!-- Main Content -->
            <main class="col-md-9">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <form action="login.php" method="POST">
                            <div class="card-header bg-success text-white">
                                <h3>Generate Weekly Reports</h3>
                            </div>
                            <div class="card-body">
                                <form action="shift_request.php" method="POST">
                                    <div class="mb-3">
                                        <label for="shift_date" class="form-label">From: </label>
                                        <input type="date" class="form-control" id="shift_date" name="shift_date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="shift_date" class="form-label">To: </label>
                                        <input type="date" class="form-control" id="shift_date" name="shift_date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="member_name" class="form-label">Type of Report</label>
                                        <select class="form-select" id="member_name" name="member_name" required>
                                            <option value="membership1">Attendance Register</option>
                                            <option value="membership2">Trainer Shift</option>
                                        </select>
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-success">Generate Report</button>
                        </form>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer>
        &copy; 2023 Fitness Club. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>