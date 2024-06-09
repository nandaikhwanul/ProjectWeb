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
    <link rel="stylesheet" href="css/dashboard_styles.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- swiper -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> -->

    <title>UnramGrad Career Guide</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <a class="navbar-logo" href="#">UnramGrad Career Guide</a>
      <div class="navbar-menu">
        <a href="#jobs">Jobs</a>
        <a href="#companies">Companies</a>
        <a href="#blog">Blogs</a>
        <a href="#" class="dashboard" onclick="window.location.href='overviewCandidate.php'">Dashboard</a>
      </div>
      <div class="menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </nav>
    
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
  </body>
</html>

<!--  
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
    
        
    </div>
</body>
</html> -->
