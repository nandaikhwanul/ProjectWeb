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
    <title>Overview</title>
    <link rel="stylesheet" href="overview_styles.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="top-bar">
                <nav>
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Find Job</a></li>
                        <li><a href="#">Find Employers</a></li>
                        <li><a href="#">Candidates</a></li>
                    </ul>
                </nav>
                <div class="contact">
                    <p>+1-202-555-0178</p>
                    <img src="indo-flag.png" alt="idn Flag">
                    <div class="profile">
                        <img src="profile-pic.jpg" alt="Profile Picture">
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="logo-container">
                    <div class="logo">
                        <img src="logo.png" alt="UnramGrad Career Guide">
                        <h1>UnramGrad Career Guide</h1>
                    </div>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Job Title, Keyword, Company">
                </div>
            </div>
        </header>
        <div class="main-content">
            <aside>
                <div class="sidebar">
                    <h2>Candidate Dashboard</h2>
                    <ul>
                        <li><a href="Overview.php" class="active">Overview</a></li>
                        <li><a href="appliedJobs.php">Applied Jobs</a></li>
                        <li><a href="Setting.php">Settings</a></li>
                    </ul>
                    <a href="homepage.php" class="logout">Log Out</a>
                </div>
            </aside>
            <section>
                <div class="overview">
                    <h2>Hello, <?php echo htmlspecialchars($username); ?></h2>
                    <div class="daily-activities">
                        <p>Here’s Your Daily Activities</p>
                        <div class="open-jobs">
                            <h3>6</h3>
                            <p>Open Jobs</p>
                        </div>
                    </div>
                    <div class="candidates">
                            <h3>200</h3>
                            <p>Candidates</p>
                    </div>
                    <div class="jobs">
                        <table>
                            <tr>
                                <th>Jobs</th>
                                <th>Status</th>
                                <th>Applications</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Remote) - Seoul</td>
                                <td class="status-active">Active</td>
                                <td>30 Applications</td>
                                <td><button>View Applications</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Remote) - Seoul</td>
                                <td class="status-active">Active</td>
                                <td>30 Applications</td>
                                <td><button>View Applications</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Remote) - Seoul</td>
                                <td class="status-active">Active</td>
                                <td>35 Applications</td>
                                <td><button>View Applications</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Contract Base) - California</td>
                                <td class="status-active">Active</td>
                                <td>35 Applications</td>
                                <td><button>View Applications</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Remote) - Seoul</td>
                                <td class="status-active">Active</td>
                                <td>35 Applications</td>
                                <td><button>View Applications</button></td>
                            </tr>
                            <tr>
                                <td>Networking Engineer (Full Time) - New Mexico</td>
                                <td class="status-active">Active</td>
                                <td>35 Applications</td>
                                <td><button>View Applications</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
