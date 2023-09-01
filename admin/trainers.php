<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
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
                <div class="card-header  text-dark mt-5">
                    <h3>Trainer's Data</h3>
                </div>
                <!-- Table -->
                <div class="table-responsive mt-5 mb-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <!-- Dummy data will be inserted here -->
                        </tbody>
                    </table>
                </div>

                <!-- Form for adding new data -->
                <form id="data-form" class="mt-5 mb-5">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            </main>
        </div>
    </div>
    <footer>
        &copy; 2023 Fitness Club. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Dummy data
        const data = [{
                id: 1,
                name: 'John Doe',
                email: 'john@example.com'
            },
            {
                id: 2,
                name: 'Jane Smith',
                email: 'jane@example.com'
            },
            // Add more dummy data as needed
        ];

        // Function to render the table with dummy data
        function renderTable() {
            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';

            data.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.email}</td>
                    <td>
                        <button class="btn btn-info btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                `;

                tableBody.appendChild(row);
            });
        }

        // Function to add new data
        document.getElementById('data-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;

            const newItem = {
                id: data.length + 1,
                name,
                email,
            };

            data.push(newItem);
            renderTable();
            this.reset();
        });

        // Initial rendering of the table
        renderTable();
    </script>
</body>

</html>