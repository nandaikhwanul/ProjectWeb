<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah masuk atau belum
if (!isset($_SESSION['username'])) {
    // Jika belum masuk, alihkan ke halaman sign in
    header("Location: signin.php");
    exit();
}

// Dapatkan username dari sesi
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard_styles.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="top-bar">
                <nav>
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="#">Find Job</a></li>
                        <li><a href="#">Employers</a></li>
                        <li><a href="#">Candidates</a></li>
                        <li><a href="#">Pricing Plans</a></li>
                        <li><a href="#">Customer Supports</a></li>
                    </ul>
                </nav>
                <div class="contact">
                    <p>+1-202-555-0178</p>
                    <img src="indo-flag.png" alt="idn Flag">
                    <button class="signin" onclick="window.location.href='signin.php'">Sign In</button>
                </div>
        </header>
        <header>
        <div class="logo-container">
                <div class="logo">
                    <img src="logo.png" alt="UnramGrad Career Guide">
                    <h1>UnramGrad Career Guide</h1>
                </div>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Job Title, Keyword, Company">
            </div>
            <div class="profile">
                <img src="profile-pic.jpg" alt="Profile Picture">
            </div>
        </header>
    
        <div class="main-content">
            <aside>
                <div class="sidebar">
                    <h2>Candidate Dashboard</h2>
                    <ul>
                        <li><a href="#" class="active">Overview</a></li>
                        <li><a href="appliedJobs.php">Applied Jobs</a></li>
                        <li><a href="settingCandidate.php">Settings</a></li>
                    </ul>
                    <a href="logout.php" class="logout">Log Out</a>
                </div>
            </aside>
            <section>
                <div class="overview">
                    <h2>Hello, <?php echo htmlspecialchars($username); ?></h2>
                    <div class="daily-activities">
                        <p>Here’s Your Daily Activities</p>
                        <div class="applied-jobs">
                            <h3>589</h3>
                            <p>Applied Jobs</p>
                        </div>
                    </div>
                    <div class="profile-warning">
                        <p>Your profile editing is not completed.</p>
                        <button>Edit Profile</button>
                    </div>
                    <div class="jobs">
                        <table>
                            <tr>
                                <th>Jobs</th>
                                <th>Data Applied</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Remote) - Seoul</td>
                                <td>02-05-2023</td>
                                <td class="status-active">Active</td>
                                <td><button>View Details</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Full Time) - Seoul</td>
                                <td>02-05-2023</td>
                                <td class="status-active">Active</td>
                                <td><button>View Details</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Temporary) - Seoul</td>
                                <td>02-05-2023</td>
                                <td class="status-active">Active</td>
                                <td><button>View Details</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Contract Base) - Seoul</td>
                                <td>02-05-2023</td>
                                <td class="status-active">Active</td>
                                <td><button>View Details</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
