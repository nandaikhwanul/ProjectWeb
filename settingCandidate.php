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
    <link rel="stylesheet" href="Setting_styles.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="top-bar">
                <nav>
                    <ul>
                        <li><a href="homepage.html">Home</a></li>
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
                        <li><a href="overview.php">Overview</a></li>
                        <li><a href="applied_jobs.php">Applied Jobs</a></li>
                        <li><a href="saved_jobs.php">Saved Jobs</a></li>
                        <li><a href="settings.php" class="active">Settings</a></li>
                    </ul>
                    <a href="home.html" class="logout">Log Out</a>
                </div>
            </aside>
            <section>
                <div class="settings">
                    <h2>Setting</h2>
                    <div class="tabs">
                        <button class="tab-link active" onclick="openTab(event, 'Personal')">Personal</button>
                        <button class="tab-link" onclick="openTab(event, 'Account')">Account Setting</button>
                    </div>
                    <div id="Personal" class="tab-content" style="display: block;">
                        <h3>Basic Information</h3>
                        <form>
                            <div class="form-group">
                                <label for="profile-pic">Profile Picture</label>
                                <div class="profile-pic">
                                    <input type="file" id="profile-pic">
                                    <p>Browse photo or drop here</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="full-name">Full Name</label>
                                <input type="text" id="full-name">
                            </div>
                            <div class="form-group">
                                <label for="title">Title/Headline</label>
                                <input type="text" id="title">
                            </div>
                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" id="experience">
                            </div>
                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" id="education">
                            </div>
                            <div class="form-group">
                                <label for="website">Personal Website</label>
                                <input type="text" id="website" placeholder="Website url...">
                            </div>
                            <button type="submit">Save Changes</button>
                        </form>
                        <h3>Your CV/Resume</h3>
                        <div class="resume-upload">
                            <div class="resume">
                                <p>Professional Resume</p>
                                <p>3.5 MB</p>
                            </div>
                            <div class="upload-new">
                                <button>Professional Resume (Only Pdf)</button>
                            </div>
                        </div>
                    </div>
                    <div id="Account" class="tab-content">
                        <h3>Account Settings</h3>
                        <form>
                        <div class="form-group">
                                <label for="map-location">Map Location</label>
                                <input type="text" id="map-location">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" placeholder="+62 Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Email Address">
                            </div>
                            <button type="submit">Save Changes</button>
                        </form>
                        <h3>Job Alerts</h3>
                        <form>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" id="role" placeholder="Your job roles">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" id="location" placeholder="City, state, country name">
                            </div>
                            <button type="submit">Save Changes</button>
                        </form>
                        <h3>Change Password</h3>
                        <form>
                            <div class="form-group">
                                <label for="current-password">Current Password</label>
                                <input type="password" id="current-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" id="new-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" id="confirm-password" placeholder="Password">
                            </div>
                            <button type="submit">Save Changes</button>
                        </form>
                        <div class="close-account">
                            <button>Close Account</button>
                            </div>
                        <!-- Isi dengan pengaturan akun yang relevan -->
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>
